
String phrase;
Boolean estUnPalindrome = true ;

Console.WriteLine("Veuillez saisie une chaine de caractére teminer par un point <.>, votre phrase ne dois pas etre composée que de < .,''>");

    phrase = Console.ReadLine().Trim();     // recupere la saisie phrase et enleve les espaces inutile en debut et en fin

while (phrase.ElementAt(phrase.Length - 1) != '.')   //  tant que (La derniere case de longueur du tableau n'est pas un ".")
{
    Console.WriteLine("Veuillez saisie une chaine de caractére teminer par un point <.>, votre phrase ne dois pas etre composée que de < .,''>");

    phrase = Console.ReadLine().Trim();      // recupere la saisie phrase et enleve les espaces inutile en debut et en fin
}
string blocDePhrase = phrase.Substring(0, phrase.Length - 1).ToLower().Replace(" ", "");  // On permute la phrase en bloc de phrase en (0 pour premiere case et fin du tableau -1) en controlant les majuscules et espaces avec les espace (.replace).

int j = blocDePhrase.Length; 

for (int i = 0; i < j; i++)
{
        j--;      
        
     if (blocDePhrase[i] != blocDePhrase[j]) // si blocDePhrase i est diferent de blocDePhrase j
                                             
        {
        estUnPalindrome = false;   // Alors palindrome devien faux   

    }
}

if(estUnPalindrome) //si palindromle est vrai
Console.WriteLine(phrase+" est un palindrome"); //afficher
else
{
    Console.WriteLine(phrase + "n'est  pas un palindrome"); //Afficher
}

/*
String phrase;
Boolean estUnPalindrome = true;

Console.WriteLine("Veuillez saisie une chaine de caractére teminer par un point <.>, votre phrase ne dois pas etre composée que de < .,''>");

phrase = Console.ReadLine().Trim();     // recupere la saisie phrase et enleve les espaces inutile en debut et en fin

while (phrase.ElementAt(phrase.Length - 1) != '.')   //  tant que (La derniere case de longueur du tableau n'est pas un ".")
{
    Console.WriteLine("Veuillez saisie une chaine de caractére teminer par un point <.>, votre phrase ne dois pas etre composée que de < .,''>");

    phrase = Console.ReadLine().Trim();      // recupere la saisie phrase et enleve les espaces inutile en debut et en fin
}
string blocDePhrase = phrase.Substring(0, phrase.Length - 1).ToLower().Replace(" ", "");  // On permute la phrase en bloc de phrase en (0 pour premiere case et fin du tableau -1) en controlant les majuscules et espaces.

int j = blocDePhrase.Length;

for (int i = 0; i < j; i++)
{
    j--;

    if (blocDePhrase[i] == blocDePhrase[j])
    {

    }
    else if (blocDePhrase[i] != blocDePhrase[j])
    {
        estUnPalindrome = false;
        Console.WriteLine(phrase + "n'est  pas un palindrome");
        break;

    }
}
if (estUnPalindrome)
    Console.WriteLine(phrase + " est un palindrome");

*/