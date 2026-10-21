''' OOP tkinter '''

import tkinter

main_window = tkinter.Tk()

teks1 = tkinter.Label(main_window, text = "Teks 1")
teks2 = tkinter.Label(main_window, text = "Teks 2")

tombol1 = tkinter.Button(main_window, text = "tombol 1")
tombol2 = tkinter.Button(main_window, text = "tombol 2")

# method positioning
teks1.pack()
teks2.pack()
tombol1.pack()
tombol2.pack()

# method menampilkan GUI
main_window.mainloop()