# GUI <- Graphical User Interface

import tkinter as tk
from tkinter import ttk
from tkinter.messagebox import showinfo

# init
window = tk.Tk()
window.configure(bg="white")
window.geometry("300x200")
window.resizable(False, False)  # aktifkan kalau mau layout tetap dan tidak berubah
window.title("Say Hai")

# variable and function
NAMA_DEPAN = tk.StringVar()
NAMA_BELAKANG = tk.StringVar()

def tombol_sapa():
    if not NAMA_DEPAN.get().strip() or not NAMA_BELAKANG.get().strip():
        showinfo(title="Oops", message="Nama depan dan belakang wajib diisi!")
        return
    pesan = f"Hai {NAMA_DEPAN.get()} {NAMA_BELAKANG.get()}, Selamat pagi"
    showinfo(title="Hai", message=pesan)


# frame input
input_frame = ttk.Frame(window)
# penempatan (grid, pack, place)
input_frame.pack(padx=10,pady=10,fill="x",expand=True)

# komponen-komponen
# 1, label nama depan
nama_depan_label = ttk.Label(input_frame,text="Nama Depan:")
nama_depan_label.pack(padx=10,fill="x",expand=True)
# 2. entry nama depan
nama_depan_entry = ttk.Entry(input_frame,textvariable=NAMA_DEPAN)
nama_depan_entry.pack(padx=10,fill="x",expand=True)
# 3, label nama belakang
nama_belakang_label = ttk.Label(input_frame,text="Nama Belakang:")
nama_belakang_label.pack(padx=10,fill="x",expand=True)
# 4. entry nama belakang
nama_belakang_entry = ttk.Entry(input_frame,textvariable=NAMA_BELAKANG)
nama_belakang_entry.pack(padx=10,fill="x",expand=True)
# 5. tombol say hello
tombol = ttk.Button(input_frame,text="Hai!",command=tombol_sapa)
tombol.pack(padx=10,pady=10,fill="x",expand=True)

# main loop window
window.mainloop()