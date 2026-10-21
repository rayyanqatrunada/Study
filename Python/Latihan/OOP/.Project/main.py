import os
import time
import random

# ===== Base Class =====
class Char:
    def __init__(self, name, health, attack, defend, role):
        self.name = name
        self.max_health = health
        self.health = health
        self.attack = attack
        self.defend = defend
        self.role = role
        self.alive = True

    def info(self):
        hp_bar = f"{self.health}/{self.max_health}"
        return f"{self.name:<10} ({self.role:<8}) HP: {hp_bar:<10}"

    def receive_damage(self, amount):
        dmg = max(0, int(amount - self.defend / 2))
        self.health -= dmg
        if self.health <= 0:
            self.health = 0
            self.alive = False
        print(f"{self.name} menerima {dmg} damage!")
        time.sleep(1)
        return dmg

    def heal(self):
        amount = int(self.max_health * 0.2)
        self.health = min(self.max_health, self.health + amount)
        print(f"{self.name} memulihkan {amount} HP!")
        time.sleep(1)
        return amount

    def is_alive(self):
        return self.alive

    def act(self, enemies):
        clear()
        print_status(global_team, global_enemy_team, global_round_num)
        print_action_prompt(self)
        while True:
            aksi = input("Pilih aksi: ")
            if aksi == "1":
                target = self.choose_target(enemies)
                if target:
                    dmg = self.attack_target(target)
                    print(f"Total damage: {dmg}")
                    break
            elif aksi == "2":
                amount = self.heal()
                print(f"Total heal: {amount}")
                break

    def choose_target(self, enemies):
        alive_targets = [e for e in enemies if e.is_alive()]
        if not alive_targets:
            return None
        print("Pilih target:")
        for i, e in enumerate(alive_targets):
            print(f"{i+1}. {e.name} ({e.role})")
        while True:
            try:
                idx = int(input("Target: ")) - 1
                return alive_targets[idx]
            except:
                print("Pilihan tidak valid.")

    def attack_target(self, target):
        print(f"{self.name} menyerang {target.name}!")
        time.sleep(1)
        return target.receive_damage(self.attack)


# ====== AI Enemy Subclass ======
class EnemyChar(Char):
    def act(self, enemies):
        clear()
        print_status(global_team, global_enemy_team, global_round_num)
        print_action_prompt(self)
        time.sleep(1)
        if self.health < self.max_health * 0.3 and random.random() < 0.5:
            amount = self.heal()
            print(f"Total heal: {amount}")
        else:
            alive_targets = [e for e in enemies if e.is_alive()]
            if not alive_targets:
                return
            target = random.choice(alive_targets)
            dmg = self.attack_target(target)
            print(f"Total damage: {dmg}")


# ====== Role Preset ======
ROLE_PRESET = {
    "Attacker":  (900, 150, 50),
    "Support":   (1000, 90, 60),
    "Buffer":    (950, 70, 80),
    "Tank":      (1200, 60, 120),
    "Mage":      (800, 160, 40),
}

# ===== Utility =====
def clear():
    os.system("cls" if os.name == "nt" else "clear")

def print_status(team, enemy, round_num):
    print(f"==== ROUND {round_num} ====")
    print("\n\t=== STATUS TEAM ===")
    for c in team:
        if c.is_alive():
            print(c.info())
        else:
            print(f"{c.name:<10} (DEAD)")
    print("\n\t=== STATUS MUSUH ===")
    for c in enemy:
        if c.is_alive():
            print(c.info())
        else:
            print(f"{c.name:<10} (DEAD)")
    print("\n")

def print_action_prompt(char):
    print(" " * 20 + "=======================")
    print(f"{char.name} ({char.role})")
    print("1. Serang")
    print("2. Heal")
    print(" " * 20 + "=======================\n")


# ====== Main Game Flow ======
global_team = []
global_enemy_team = []
global_round_num = 1

def main():
    global global_team, global_enemy_team, global_round_num
    clear()
    print("Pilih 3 karakter dari 5 role berikut:")
    available = list(ROLE_PRESET.keys())
    team = []
    for i in range(3):
        for j, role in enumerate(available):
            print(f"{j+1}. {role}")
        while True:
            try:
                choice = int(input(f"Pilih karakter ke-{i+1}: ")) - 1
                role = available[choice]
                name = input("Nama karakter: ")
                hp, atk, dfd = ROLE_PRESET[role]
                team.append(Char(name, hp, atk, dfd, role))
                break
            except:
                print("Input tidak valid.")

    enemy_team = [
        EnemyChar("Claire", 900, 100, 50, "Attacker"),
        EnemyChar("main.py", 850, 80, 40, "Mage"),
        EnemyChar("contoh", 1100, 70, 90, "Tank"),
    ]

    global_team = team
    global_enemy_team = enemy_team
    round_num = 1
    global_round_num = round_num

    while True:
        clear()
        print_status(team, enemy_team, round_num)

        all_chars = [c for c in team + enemy_team if c.is_alive()]
        random.shuffle(all_chars)

        for char in all_chars:
            if not char.is_alive():
                continue
            if char in team:
                char.act(enemy_team)
            else:
                char.act(team)
            input("\nTekan ENTER untuk lanjut...")

            if all(not e.is_alive() for e in enemy_team):
                print("\n>>> KAMU MENANG!")
                return
            if all(not p.is_alive() for p in team):
                print("\n>>> KAMU KALAH!")
                return

        round_num += 1
        global_round_num = round_num
        input("\nTekan ENTER untuk lanjut...")


if __name__ == "__main__":
    main()
