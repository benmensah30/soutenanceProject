 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Liste des Epreuves</title>
     <style>
         .entete {
             font-weight: bold;
             display: flex;
             width: 100%;
         }

         body p{
            align-items: center;
            padding: 0 20px;
         }

         body{
            padding: 20px 100px;
         }

         table tr td{
            font-weight: bold;
         }
     </style>
 </head>

 <body>
     <table width="100%">
         <tbody>

             <tr>
                 <td>
                     Épreuve de {{ $epreuves->classe }}
                 </td>
                 <td class="entete">
                     Matière de {{ $epreuves->matiere }}
                 </td>
             </tr>
         </tbody>
     </table>
     <p>
         {!! $epreuves->contenue !!}
     </p>


 </body>

 </html>