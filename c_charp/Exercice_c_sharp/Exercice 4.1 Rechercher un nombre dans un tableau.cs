String resultat = " non trouvé";
int nombreUtilisateur;
int[] tab = { 8, 16, 32, 64, 128, 256, 512 };

Console.WriteLine("Veuillez saisir le nommbre rechercher");
nombreUtilisateur = int.Parse(Console.ReadLine());

for(int i = 0; i < tab.Length; i++)
{
    if (tab[i] == nombreUtilisateur)
    {
        resultat = " touvé ";
    }
  
} Console.WriteLine(resultat) ;

