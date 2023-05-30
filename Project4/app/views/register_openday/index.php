<h1>Registreren voor de opendag</h1>
<form method="post" action+"/registeropenday/">
    <label for="">Voornaam</label>
    <input name="firstname" id="firstname" type="text">
    <br>
    <label for="">Achternaam    </label>
    <input name="lastname" id="lastname" type="text">

    <br>
    <label for="email">Email</label>
    <input name="email" type="email">

    <br>
    <label for="phone">Mobiel</label>
    <input name="phone" type="tel" pattern="(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)" placeholder="+310624141572"> 

    <br>
    <input type="submit">
</form>