# width and multiline

# data

data_nama = "Furina"
data_umur = 501
data_tinggal = "Fountain"

# string standar
data_string = f"nama = {data_nama}, umur = {data_umur}, tinggal = {data_tinggal}"
print(5*"="+"DATA STRING"+5*"=")
print(data_string)

# string multiline (menggunakan enter, newline \n)
data_string = f"nama = {data_nama}, \numur = {data_umur}, \ntinggal = {data_tinggal}"
print("\n"+5*"="+"DATA STRING"+5*"=")
print(data_string)

# string multiline (kutip triplets)
data_string = f"""nama    = {data_nama}
umur    = {data_umur}
tinggal = {data_tinggal}
"""
print("\n"+5*"="+"DATA STRING"+5*"=")
print(data_string)

# mengatur lebar
data_string = f"""nama    = {data_nama:>8} 
umur    = {data_umur:>8}
tinggal = {data_tinggal}
""" # jadi rata kanan
print("\n"+5*"="+"DATA STRING"+5*"=")
print(data_string)
