import pygame
import random

pygame.init()

# Konstanta umum
lebar_layar = 500
tinggi_layar = 500
grid_size = 20

putih = (255, 255, 255)
hitam = (0, 0, 0)
hijau = (0, 255, 0)
merah = (255, 0, 0)
abu = (30, 30, 30)
abu_tua = (50, 50, 50)
biru = (0, 150, 255)

layar = pygame.display.set_mode((lebar_layar, tinggi_layar))
pygame.display.set_caption("Gem Snek")
font = pygame.font.SysFont("arial", 24)
font_besar = pygame.font.SysFont("arial", 32, bold=True)

clock = pygame.time.Clock()
FPS = 60
delay_gerak = 80
waktu_terakhir_gerak = pygame.time.get_ticks()

# === Fungsi umum ===

def buat_makanan(snake):
    while True:
        x = random.randint(0, (lebar_layar - grid_size) // grid_size) * grid_size
        y = random.randint(0, (tinggi_layar - grid_size) // grid_size) * grid_size
        if (x, y) not in snake:
            return (x, y)

def tampilkan_skor(nilai):
    teks = font.render(f"Skor: {nilai}", True, putih)
    layar.blit(teks, (10, 10))

def tampilkan_game_over_popup(nilai):
    popup_w, popup_h = 300, 160
    popup_x = lebar_layar // 2 - popup_w // 2
    popup_y = tinggi_layar // 2 - popup_h // 2
    pygame.draw.rect(layar, abu_tua, (popup_x, popup_y, popup_w, popup_h), border_radius=10)
    pygame.draw.rect(layar, putih, (popup_x, popup_y, popup_w, popup_h), 2, border_radius=10)

    teks1 = font_besar.render("Game Over", True, merah)
    teks2 = font.render(f"Skor: {nilai}", True, putih)
    teks3 = font.render("Klik untuk main lagi", True, putih)

    layar.blit(teks1, (lebar_layar//2 - teks1.get_width()//2, popup_y + 20))
    layar.blit(teks2, (lebar_layar//2 - teks2.get_width()//2, popup_y + 65))
    layar.blit(teks3, (lebar_layar//2 - teks3.get_width()//2, popup_y + 105))

def gambar_mata(kepala, arah):
    cx, cy = kepala[0], kepala[1]
    ox, oy = arah

    # Offset jarak dari tengah dan dari tepi
    jarak_tepi = 4   # seberapa jauh dari tepi depan kepala (makin besar makin mundur)
    offset_samping = 5  # jarak antar mata

    # Mata horizontal
    if ox != 0:
        mata_y1 = cy + offset_samping
        mata_y2 = cy + grid_size - offset_samping
        if ox > 0:  # ke kanan
            mata_x = cx + grid_size - jarak_tepi
        else:  # ke kiri
            mata_x = cx + jarak_tepi
        pygame.draw.circle(layar, hitam, (mata_x, mata_y1), 2)
        pygame.draw.circle(layar, hitam, (mata_x, mata_y2), 2)

    # Mata vertikal
    elif oy != 0:
        mata_x1 = cx + offset_samping
        mata_x2 = cx + grid_size - offset_samping
        if oy > 0:  # ke bawah
            mata_y = cy + grid_size - jarak_tepi
        else:  # ke atas
            mata_y = cy + jarak_tepi
        pygame.draw.circle(layar, hitam, (mata_x1, mata_y), 2)
        pygame.draw.circle(layar, hitam, (mata_x2, mata_y), 2)


def reset_game():
    snake = [(100, 100), (80, 100), (60, 100)]
    arah = (grid_size, 0)
    makanan = buat_makanan(snake)
    skor = 0
    return snake, arah, makanan, skor

# === Menu Awal ===
def menu_utama():
    tombol_dinding = pygame.Rect(150, 200, 200, 60)
    tombol_tanpa = pygame.Rect(150, 300, 200, 60)

    while True:
        layar.fill(abu)
        judul = font_besar.render("Gem Snek", True, putih)
        layar.blit(judul, (lebar_layar//2 - judul.get_width()//2, 100))

        pygame.draw.rect(layar, biru, tombol_dinding, border_radius=10)
        pygame.draw.rect(layar, hijau, tombol_tanpa, border_radius=10)

        teks1 = font.render("Dengan Dinding", True, putih)
        teks2 = font.render("Tanpa Dinding", True, putih)
        layar.blit(teks1, (tombol_dinding.x + 30, tombol_dinding.y + 18))
        layar.blit(teks2, (tombol_tanpa.x + 40, tombol_tanpa.y + 18))

        pygame.display.update()

        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                return None
            if event.type == pygame.MOUSEBUTTONDOWN:
                if tombol_dinding.collidepoint(event.pos):
                    return "dinding"
                if tombol_tanpa.collidepoint(event.pos):
                    return "bebas"

# === Main Game ===
def jalankan_game(mode_tembok):
    global waktu_terakhir_gerak
    snake, arah, makanan, skor = reset_game()
    next_arah = arah
    game_over = False

    while True:
        clock.tick(FPS)
        waktu_sekarang = pygame.time.get_ticks()

        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                return False
            if event.type == pygame.KEYDOWN and not game_over:
                if event.key == pygame.K_UP and arah != (0, grid_size):
                    next_arah = (0, -grid_size)
                elif event.key == pygame.K_DOWN and arah != (0, -grid_size):
                    next_arah = (0, grid_size)
                elif event.key == pygame.K_LEFT and arah != (grid_size, 0):
                    next_arah = (-grid_size, 0)
                elif event.key == pygame.K_RIGHT and arah != (-grid_size, 0):
                    next_arah = (grid_size, 0)
            if event.type == pygame.MOUSEBUTTONDOWN and game_over:
                return True

        if not game_over and waktu_sekarang - waktu_terakhir_gerak >= delay_gerak:
            waktu_terakhir_gerak = waktu_sekarang
            arah = next_arah
            kepala = (snake[0][0] + arah[0], snake[0][1] + arah[1])

            # Mode tanpa dinding
            if mode_tembok == "bebas":
                kepala = (
                    kepala[0] % lebar_layar,
                    kepala[1] % tinggi_layar
                )
            else:  # Mode dengan dinding
                if (kepala[0] < 0 or kepala[0] >= lebar_layar or
                    kepala[1] < 0 or kepala[1] >= tinggi_layar):
                    game_over = True
                    continue

            if kepala in snake[1:]:
                game_over = True
                continue

            snake.insert(0, kepala)

            if kepala == makanan:
                skor += 1
                makanan = buat_makanan(snake)
            else:
                snake.pop()

        # Gambar semua
        layar.fill(abu)
        pygame.draw.circle(layar, merah, (makanan[0] + grid_size//2, makanan[1] + grid_size//2), grid_size//2 - 2)
        for i, segmen in enumerate(snake):
            pygame.draw.rect(layar, hijau, (*segmen, grid_size, grid_size))
            if i == 0:
                gambar_mata(segmen, arah)

        tampilkan_skor(skor)
        if game_over:
            tampilkan_game_over_popup(skor)

        pygame.display.update()

# === Jalankan ===
mode = menu_utama()
if mode:
    while jalankan_game(mode):
        pass

pygame.quit()
