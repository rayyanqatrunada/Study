# latihan kalkulator sederhana

print(20*"=" + "\n" + "Kalkulator Sederhana" + "\n" + 20*"=" + "\n")

angka1 = float(input("Masukan angka ke-1 \t : "))
operator = input("Masukan operator +,-,x,/ : ")
angka2 = float(input("Masukan angka ke-2 \t : "))

# cara 1 (if-elif-else)
if operator == "+":
    hasil = angka1 + angka2
    print(f"hasilnya adalah = {hasil}")
elif operator == "-":
    hasil = angka1 - angka2
    print(f"hasilnya adalah = {hasil}")
elif operator == "x" or operator == "*":
    hasil = angka1 * angka2
    print(f"hasilnya adalah = {hasil}")
elif operator == "/":
    if angka2 != 0:
        hasil = angka1 / angka2
        print(f"hasilnya adalah = {hasil}")
    else:
        print("Tidak bisa dibagi dengan nol!")
else:
    print("masukin yanga bener dong")


# cara 2 (match-case)
match operator:
    case "+":
        hasil = angka1 + angka2
        print(f"hasilnya adalah = {hasil}")
    case "-":
        hasil = angka1 - angka2
        print(f"hasilnya adalah = {hasil}")
    case "x" | "*":
        hasil = angka1 * angka2
        print(f"hasilnya adalah = {hasil}")
    case "/":
        if angka2 != 0:
            hasil = angka1 / angka2
            print(f"hasilnya adalah = {hasil}")
        else:
            print("Tidak bisa dibagi dengan nol!")
    case _:
        print("Masukin yang bener dong")
