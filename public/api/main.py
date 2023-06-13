import sys

photo1_path = sys.argv[1]
photo2_path = sys.argv[2]

# Ouvrir les fichiers en mode lecture
photo1 = open(photo1_path, 'rb')
photo2 = open(photo2_path, 'rb')

# Traiter les photos ici...
output = "Le traitement des photos est terminé."

# Fermer les fichiers
photo1.close()
photo2.close()

# Afficher le résultat
print(output)
