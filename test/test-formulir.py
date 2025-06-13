import unittest
import requests
from bs4 import BeautifulSoup

class TestFormulirMain(unittest.TestCase):
    def setUp(self):
        self.url = 'http://localhost/AI/main.php'
        self.response = requests.get(self.url)
        self.soup = BeautifulSoup(self.response.text, 'html.parser')

    def test_page_status_code(self):
        self.assertEqual(self.response.status_code, 200, "❌ Halaman main.php tidak dapat diakses (status code bukan 200)")
        print("✅ Halaman main.php berhasil diakses (status code 200)")

    def test_form_exists(self):
        form = self.soup.find('form')
        self.assertIsNotNone(form, "❌ Formulir tidak ditemukan di halaman main.php")
        print("✅ Formulir ditemukan di halaman main.php")

if __name__ == '__main__':
    unittest.main()
