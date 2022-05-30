char [] tableauDalphabet ={'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z' };
string texte;

int[] nombreDeLettre = new int[26];

do 
{  
//Faire

    Console.WriteLine("Veuillez saisir un texte d'au moin 120 caractere ");
       // Afficher  "Veuillez saisir un texte d'au moin 120 caractere ";
    
    texte = Console.ReadLine().ToLower();
       // Recupere la saisie untilisateur

    texte =texte.Replace("é", "e").Replace("è", "e");
        // Modifie les é en e ;

} while ( texte.Length < 10);   
        // Tant que texte < 120 caractere 

  char [] texteCaractere = texte.ToCharArray();
        // Convertion de chaine de caractere en tableau de caractere  

for(int i = 0; i < texteCaractere.Length; i++)
        // tand que i est inferieur au texte de cararctere i ++s
{
    for (int j = 0; j < tableauDalphabet.Length; j++)
        // tand que j est inferieur au texte de cararctere j ++
    {

        if (texteCaractere[i] == tableauDalphabet[j])
             {
         // si index i texteCaractere est egale index j tableauDalphabet
            nombreDeLettre[j]++ ;
         // On ajoute +1 nombre de lettre
             }

    }
}
for(int i = 0; i < nombreDeLettre.Length; i++)
        // tand que i est inferieur au texte de cararctere i ++
{
    if (nombreDeLettre[i] > 0)
    // Si  nombreDeLettre est superieur à 0
    {
        Console.WriteLine("Il y a " + nombreDeLettre[i]+" lettre de "+tableauDalphabet[i]);
    }   // Ecrire " Il y a nombreDeLettre et lettre de "tableauDalphabet"

}


Console.WriteLine("Dans la phrase : "+texte);
        // Ecrire "Dans la phrase texte"
