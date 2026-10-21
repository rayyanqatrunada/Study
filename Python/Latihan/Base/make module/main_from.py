# membuat module dengan import

from matematika import tambah,kali,pangkat
# from matematika import *, ini akan mengiport semua fungsi(kurang diajurkan untuk proyek besar)

hasil = tambah(1,2,3,2,1,1)
print(f"hasil tambah = {hasil}")
hasil = kali(2,4)
print(f"hasil kali = {hasil}")
pangkat4 = pangkat(4)
print(f"hasil pangkat4 = {pangkat4(2)}")