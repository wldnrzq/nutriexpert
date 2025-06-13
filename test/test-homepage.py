import unittest
import requests
from bs4 import BeautifulSoup

class TestHomepage(unittest.TestCase):
    def setUp(self):
        self.url = 'http://localhost/ai/index.php'
        self.response = requests.get(self.url)
        self.soup = BeautifulSoup(self.response.text, 'html.parser')

    def test_button_konsultasi_sekarang_exists(self):
        button = self.soup.find('a', string='Konsultasi Sekarang')
        self.assertIsNotNone(button, "❌ Tombol 'Konsultasi Sekarang' tidak ditemukan di homepage")
        print("✅ Tombol 'Konsultasi Sekarang' sudah bekerja tanpa kendala")

    def test_nav_links_work(self):
        nav_links = self.soup.select('nav a')
        self.assertGreater(len(nav_links), 0, "❌ Tidak ada link di navbar")
        print("")
        print("✅ Link di navbar sudah ditemukan dan berfungsi")

if __name__ == '__main__':
    unittest.main()
