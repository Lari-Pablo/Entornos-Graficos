<html>
    <head>
        <title>Página HTML configurable</title>
    </head>
    <body>
        <p stlye="text-align: center;">Configuración de estilo</p>
        <br />
        <form action="configurar.php" method = "post">
            Selecciona el estilo que deseas ver en la página:
            <br />
            <select name ="estilo">
                <option value="rosa">Rosa
                <option value="celeste">Celeste 
                <option value="violeta">Violeta 
            </select>  
        <input type="submit" value="Actualizar el estilo">
        </form>
    </body>
</html>
  
