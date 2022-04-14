import pygame


pygame.init()

pygame.display.set_caption('Quick Start')
win = pygame.display.set_mode((800, 600))

background = pygame.Surface((800, 600))
background.fill(pygame.Color('#45494e'))
card = pygame.image.load('./carte.png')
button = pygame.image.load('./button.png')
is_running = True

while is_running:

    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            is_running = False

    win.fill('white')
    win.blit(card, (250, 50))
    win.blit(button, (250, 250))

    pygame.display.update()