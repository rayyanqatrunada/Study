''' abstral class and decorator '''

from abc import ABC, abstractmethod

class Button(ABC):

    def __init__(self,set_link):
        self.link = set_link

    @abstractmethod
    def click(self):
        pass

    @property
    @abstractmethod
    def link(self):
        return self.link
    
class PushButton(Button):

    def click(self):
        print(f"Go To: {self.link}")

    @Button.link.getter
    def link(self):
        return self.__link

    @link.setter
    def link(self,set_link):
        self.__link = set_link


tombol1 = PushButton("https.........")

tombol1.click()