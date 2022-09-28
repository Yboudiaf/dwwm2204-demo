
int[] tableau = { 128, 64, 8, 512, 16, 32, 256 };


int permutation =0;







for (int i = 0; i < tableau.Length; i++) // Pour : index de position +1 jusqu'a la fin de longueur du tableau.
{
        for(int j = i  ; j < tableau.Length; j++) // Pour: index de position + 1 jusqu'a la fin de longueur du tableau.
        {     
            
             if (tableau[i] >tableau[j])    // Si : index du tableau est plus petit que le tableau index affichage 
            { 
                
     
                permutation = tableau[i];   // Cree une variable permutation pour lui affecter la valeur du tableau i 
                tableau[i] = tableau[j];    // La valeur du tableau j prend la valeur du tableau i
                tableau[j] = permutation;   // La valeur j prend alor la valeur permutation


        
             }
            
        }

} 
    for (int i = 0; i < tableau.Length; i ++) // pour afficher la valeur de chaque element du tableau
    {
   Console.WriteLine(tableau[i]);
    }
       













