# standard library


import datetime

data_waktu = datetime.datetime.now()
print(f"waktu saat ini = {data_waktu}")
print(f"tahun saat ini = {data_waktu.year}")
print(f"hari saat ini  = {data_waktu.strftime("%A")}")

from collections import Counter

data_list = ["a","c","b","a","a","c","b","a"]

data_count = Counter(data_list)
print(f"data count = {data_count}")
print(f"data count a = {data_count['a']}")

import io

# file = io.open("file_text.txt","r") # cara 1
file = io.open("d:/Project/Coding/Python/Latihan/latihan library/standard library/file_text.txt","r") # cara 2
print(file.read())