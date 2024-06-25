import pytest
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.by import By

@pytest.fixture(scope="function")
def browser():
    options = Options()
    options.add_argument('--headless')
    options.add_argument('--no-sandbox')
    options.add_argument('--disable-dev-shm-usage')
    driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()), options=options)
    yield driver
    driver.close()

def test_application_up_and_running(browser):
    browser.get("http://localhost/")

    assert "Test" in browser.title

    table = browser.find_element(By.ID, "devops-app")
    assert table is not None, "Table with ID 'devops-app' not found"

    headers = table.find_elements(By.TAG_NAME, 'th')
    assert len(headers) > 1

    rows = table.find_elements(By.TAG_NAME, 'tr')
    assert len(rows) > 1