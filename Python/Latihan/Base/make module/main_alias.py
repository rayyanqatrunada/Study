# module matematika dengan import

from matematika import tambah as add
from matematika import kali as ka
from matematika import pangkat as pang
# from matematika import *, ini akan mengiport semua fungsi(kurang diajurkan untuk proyek besar)

import matematika as math # <- ini juga bisa dilakukan

hasil = add(1,2,3,2,1,1)
print(f"hasil tambah = {hasil}")

hasil = ka(2,4)
print(f"hasil kali = {hasil}")

pangkat4 = pang(4)
print(f"hasil pangkat4 = {pangkat4(2)}")