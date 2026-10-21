# looping list

# dengan for loop
print("For Loop")
data_angka = [2,3,2,1,4,6,4]

for i in data_angka:
    print(f"data angka = {i}")

data_nama = ["Furina","Yui","Charlotta"]

for i in data_nama:
    print(f"data nama = {i} ")

# dengan for loop dan range
print("\nFor Loop and Range")
data_angka = [4,3,2,4,2,1,3]

panjang = len(data_angka)

for i in range(panjang):
    print(f"data angka = {data_angka[i]}")

# dengan while
print("\nWhile Loop")
data_angka = [2,3,2,1,4,6,4]

panjang = len(data_angka)
i = 0

while i < panjang:
    print(f"data angka = {data_angka[i]}")
    i += 1

# dengan list comprehension
print("\nList Comprehension")
data = [2,3,"Yui",1,4,"Qiqi",4]

[print(f"data = {i}") for i in data]

data_angka = [2,3,2,1,4,6,4]

data_kuadrat = [(i**2) for i in data_angka] # mengkuadratkan angka pada data_angka
print(f"data kuadrat = {data_kuadrat}")

# dengan enumerate
print("\nEnumerate")
data_list = [2,3,"Yui",1,4,"Qiqi",4]

for index,data in enumerate(data_list):
    print(f"index = {index}, data = {data}")
