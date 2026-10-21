
# cara import 
import sains.mtk # cara 1
from sains import mtk # cara 2
from sains.fisika import gaya # cara 3
from sains.fisika import gaya as g # cara 4

hasil_tambah = sains.mtk.tambah(1,2,2,5)
print(hasil_tambah)

hasil_kali= sains.mtk.kali(2,5)
print(hasil_kali)

hasil_tambah = mtk.tambah(10,5)
print(hasil_tambah)

hasil_kali= mtk.kali(4,5)
print(hasil_kali)

hasil_gaya = gaya(9,10)
print(hasil_gaya)

hasil_gaya = g(10,10)
print(hasil_gaya)