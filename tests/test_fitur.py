# tests/test_fitur.py
import sys
import os

# Menambahkan folder 'app' ke sys.path
sys.path.insert(0, os.path.abspath(os.path.join(os.path.dirname(__file__), '../app')))

from fitur import fungsi_baru

def test_fitur_baru():
    hasil_yang_diharapkan = 10
    assert fungsi_baru() == hasil_yang_diharapkan
