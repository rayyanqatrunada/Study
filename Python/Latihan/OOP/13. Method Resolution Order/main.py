''' method resolution order '''

class A:
    def show(self):
        print("Ini adalah method A")

class B:
    def show(self):
        print("Ini adalah method B")

class C(A,B):
    pass

objek = C()
objek.show() # akan menunjukkan method A
help(objek) # untuk melihat urutan method