<?php 

namespace A;
{
    function direBonjour()
    {
        echo "Bonjour je suis la fonction direBonjour() du namespace A <br>";
    }
}


namespace B;
{
    function direBonjour()
    {
        echo "Bonjour je suis la fonction direBonjour() du namespace B <br>";
    }
}

use A; // use permet d'importer un namespace
echo A\direBonjour();

use B; // use permet d'importer un namespace
echo B\direBonjour();