''' diamond problem '''

class A:
    def show(self):
        print("ini adalah method A")

class B(A):
    def show(self):
        print("ini adalah method B")

class C(A):
    def show(self):
        print("ini adalah method C")

class D(B,C):
    def show(self):
        print("ini adalah method D")


objek = D()
objek.show() # akan menunjukkan method D
help(objek) # urutan method D -> B -> C -> A