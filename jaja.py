# Import the necessary libraries
import random
import pygame

# Initialize Pygame and set up the window
pygame.init()
window_width = 2560
window_height = 1440
window = pygame.display.set_mode((window_width, window_height))

# Run the game loop
while True:
  # Check for player input
  for event in pygame.event.get():
    if event.type == pygame.KEYDOWN:
      if event.key == pygame.K_q:
        pygame.quit()
        quit()

  # Clear the window
  window.fill((0, 0, 0))

  # Draw 50 random shapes
  for i in range(3000):
    # Choose random colors, sizes, and positions
    color = (random.randint(0, 255), random.randint(0, 255), random.randint(0, 255))
    size = random.randint(10, 100)
    x = random.randint(0, window_width - size)
    y = random.randint(0, window_height - size)

    # Draw the shape
    pygame.draw.rect(window, color, (x, y, size, size))

  # Update the window
  pygame.display.update()