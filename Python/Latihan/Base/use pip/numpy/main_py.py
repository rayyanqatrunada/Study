import numpy as np



list_a = [1,2,3,4]
print(f"list_a = {list_a}") # list akan ada koma
# print(f"list_a**2 = {list_a**2}"), ini akan eror

vector_a = np.array([1,2,3,4]) # Membuat array NumPy (bisa 1D atau 2D/matrix)
print(f"vector_a = {vector_a}") # list tidak ada koma
print(f"vector_a**2 = {vector_a**2}") # dipangkatkan 2
print(f"vector_a*5  = {vector_a*5}") # dikali 5


matrix_b = np.array([(1,2),(3,4)])
print(f"matrix_b = \n{matrix_b}")
print(f"matrix_b**2 = \n{matrix_b**2}")
print(f"matrix_b*3  = \n{matrix_b*3}")


zeros_c = np.zeros([2,2]) # akan membuat matrix yang berisi 0
print(f"zeros_c = \n{zeros_c}")

ones_d = np.ones([2,2]) # akan membuat matrix yang berisi 1
print(f"ones_d = \n{ones_d}")

jumlah =  matrix_b + matrix_b**2 + ones_d 
print(jumlah)