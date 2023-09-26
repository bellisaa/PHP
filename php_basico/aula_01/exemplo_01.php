<?php
//comando para mostrar mensagem na pagina

echo "Oh, whoa-oh-oh-oh
I'm in love with Juda-as, Juda-as
Oh, whoa-oh-oh-oh
I'm in love with Juda-as, Juda-as
Judas, Juda-ah-ah, Judas, Juda-ah-ah
Judas, Juda-ah-ah, Judas, Gaga
Judas, Juda-ah-ah, Judas, Juda-ah-ah
Judas, Juda-ah-ah, Judas, Gaga
When he calls to me, I am ready
I'll wash his feet with my hair if he needs
Forgive him when his tongue lies through his brain
Even after three times, he betrays me
Ah-ah, ah-ah-ah-ah, ah-ah, ah-ah-ah-ah
I'll bring him down, bring him down, down
Ah-ah, ah-ah-ah-ah, ah-ah, ah-ah-ah-ah
A king with no crown, king with no crown
I'm just a Holy Fool, oh, baby, it's so cruel
But I'm still in love with Judas, baby
I'm just a Holy Fool, oh, baby, it's so cruel
But I'm still in love with Judas, baby
Oh, whoa-oh-oh-oh
I'm in love with Juda-as, Juda-as
Oh, whoa-oh-oh-oh
I'm in love with Juda-as, Juda-as
Judas, Juda-ah-ah, Judas, Juda-ah-ah
Judas, Juda-ah-ah, Judas, Gaga
I couldn't love a man so purely
Even prophets forgave his goofy way
I've learned love is like a brick, you can
Build a house or sink a dead body
Ah-ah, ah-ah-ah-ah, ah-ah, ah-ah-ah-ah
I'll bring him down, bring him down, down
Ah-ah, ah-ah-ah-ah, ah-ah, ah-ah-ah-ah
A king with no crown, king with no crown
I'm just a Holy Fool, oh, baby, it's so cruel
But I'm still in love with Judas, baby
I'm just a Holy Fool, oh, baby, it's so cruel
But I'm still in love with Judas, baby
Oh, whoa-oh-oh-oh
I'm in love with Juda-as, Juda-as
Oh, whoa-oh-oh-oh
I'm in love with Juda-as, Juda-as
Ew
In the most Biblical sense, I am beyond repentance
Fame hooker, prostitute, wench vomits her mind
But in the cultural sense, I just speak in future tense
Judas, kiss me if offensed, or wear ear condom next time
I wanna love you
But something's pulling me away from you
Jesus is my virtue
And Judas is the demon I cling to, I cling to
Just a Holy Fool, oh, baby, it's so cruel
But I'm still in love with Judas, baby
I'm just a Holy Fool, oh, baby, it's so cruel
But I'm still in love with Judas, baby
Oh, whoa-oh-oh-oh
I'm in love with Juda-as, Juda-as
Whoa-oh-oh-oh
I'm in love with Juda-as, Juda-as
Judas, Juda-ah-ah, Judas, Juda-ah-ah
Judas, Juda-ah-ah, Judas, Gaga.
";

$nome = "Germanotta";
$curso = "ads";
$carga_horaria = 60;
$mensalidade = 800.00;
$status = true;

//Concatenação de variáveis
echo "<br> Seje bem-vinda(o), ".$nome;
echo "<h3>Seu curso é $curso</h3>";
echo "<h5>Seu curso custa apenas R$$mensalidade";
echo "<h5>O status atual da sua matricula é: $status</h5>";

//tipos de dados
echo "<h2>Tipos de dados:</h2>";
echo "Variavel nome: ".gettype($status)."<br>";
echo "Variavel nome: ".gettype($carga_horaria)."<br>";
echo "Variavel nome: ".gettype($mensalidade)."<br>";
echo "Variavel nome: ".gettype($curso)."<br>";
//descrição da variavel
echo "<h2>Descrição da Variavel</h2>";
echo var_dump($nome)."<br>";
echo var_dump($curso)."<br>";
echo var_dump($mensalidade)."<br>";
echo var_dump($carga_horaria)."<br>";
echo var_dump($status)."<br>";
?>