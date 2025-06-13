import unittest
import requests
from bs4 import BeautifulSoup

class TestFormulirDiagnosa(unittest.TestCase):
    def setUp(self):
        self.url = 'http://localhost/AI/process_diagnosa.php'
        self.response = requests.get(self.url)

    def test_status_code(self):
        self.assertEqual(self.response.status_code, 200, "❌ Halaman process_diagnosa.php tidak dapat diakses (status code bukan 200)")
        print("✅ Halaman process_diagnosa.php berhasil diakses (status code 200)")

if __name__ == '__main__':
    unittest.main()
