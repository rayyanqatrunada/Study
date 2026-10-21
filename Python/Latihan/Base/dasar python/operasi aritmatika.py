#operasi aritmatika

a = 14
b = 4

#pertambahan
hasil = a+b
print(a, '+', b, '=', hasil)

#pengurangan
hasil = a-b
print(a, '-', b, '=', hasil)

#perkalian
hasil = a*b
print(a, '*', b, '=', hasil)

#pembagian
hasil = a/b
print(a, '/', b, '=', hasil)

#pangkat
hasil = a**b
print(a, '**', b, '=', hasil)

#modulus
hasil = a%b
print(a, '%', b, '=', hasil)

#floor division
hasil = a//b
print(a, '//', b, '=', hasil)

#prioritas perhitungan
'''
    1.dalam kurung ()
    2.perpangkatan **
    2.perkalian dan setingkatnya *, /, //, %
    4.pertambahan dan pengurangan
'''

x = 2
y = 4
z = 3
hasil = x * y + z ** x / y - z // x + y % x
print(x,'*',y,'+',z,'**',x,'/',y,'-',z,'//',x,'+',y,'%',x, '=', hasil)

hasil = x + y / x - (z * x) + y ** x
print(x,'+',y,'/',x,'- (',z,'*',x,') +',y,'**',x,'=',hasil)