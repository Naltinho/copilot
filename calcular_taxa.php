<?php
// todos os bairros e zonas serão previamente incluidos.

function calcularTaxaTransporte($bairroProfessor, $bairroAluno) {
    // Definição dos grupos de bairros
    $baixa = ["kukala", "marinha"];
    $centro = ["maioA", "maioB", "maioC", "nkulua"];
    $zonaNordeste = ["kikudo", "bundila", "ilha"];
    $zonaNoroeste = ["fapa", "nkungue", "kimbumba", "teixeira", "kami", "california", "kindombele"];
    $zonaPerif1 = ["kintambi", "kimpondo", "olo", "kitxitxu", "tuku"];
    $zonaPerif2 = ["pungu", "garra", "ngada"];
    $zonaPerif3 = ["mongo", "bairrodafina", "pangala"];
    $zonaSul = ["kinganga", "kitona", "bairromilitar"];

    // Regra 1: Bairros iguais
    if ($bairroProfessor === $bairroAluno) {
        return 0;
    }

    // Regras Baixa vs Baixa
    if (in_array($bairroProfessor, $baixa) && in_array($bairroAluno, $baixa)) {
        return 400;
    }

    // Regras Baixa vs Centro
    if ((in_array($bairroProfessor, $baixa) && in_array($bairroAluno, $centro)) || 
        (in_array($bairroAluno, $baixa) && in_array($bairroProfessor, $centro))) {
        $origem = in_array($bairroProfessor, $baixa) ? $bairroProfessor : $bairroAluno;
        $destino = in_array($bairroProfessor, $centro) ? $bairroProfessor : $bairroAluno;

        if ($destino === "maioC") {
            return ($origem === "kukala" || $origem === "marinha") ? 1000 : 600;
        } elseif ($destino === "nkulua") {
            return 800;
        } else { // maioA e maioB
            return 600;
        }
    }

    // Regras Internas do Centro
    if (($bairroProfessor === "maioA" && $bairroAluno === "maioB") || 
        ($bairroProfessor === "maioB" && $bairroAluno === "maioA") || 
        ($bairroProfessor === "maioA" && $bairroAluno === "maioC") || 
        ($bairroProfessor === "maioC" && $bairroAluno === "maioA") || 
        ($bairroProfessor === "maioA" && $bairroAluno === "nkulua") || 
        ($bairroProfessor === "nkulua" && $bairroAluno === "maioA") || 
        ($bairroProfessor === "maioB" && $bairroAluno === "maioC") || 
        ($bairroProfessor === "maioC" && $bairroAluno === "maioB")) {
        return 400;
    } elseif (($bairroProfessor === "maioC" && $bairroAluno === "nkulua") || 
              ($bairroProfessor === "nkulua" && $bairroAluno === "maioC")) {
        return 500;
    }

    // Centro vs Zona Noroeste
    if ((in_array($bairroProfessor, $centro) && in_array($bairroAluno, $zonaNoroeste)) || 
        (in_array($bairroAluno, $centro) && in_array($bairroProfessor, $zonaNoroeste))) {
        $destino = in_array($bairroProfessor, $zonaNoroeste) ? $bairroProfessor : $bairroAluno;
        return ($destino === "kimbumba") ? 600 : 400;
    }

    // Baixa vs Zonas Noroeste/Nordeste/Periféricas/Sul
    if ((in_array($bairroProfessor, $baixa) && in_array($bairroAluno, $zonaNoroeste)) || 
        (in_array($bairroAluno, $baixa) && in_array($bairroProfessor, $zonaNoroeste))) {
        return 1000;
    } elseif ((in_array($bairroProfessor, $baixa) && in_array($bairroAluno, $zonaNordeste)) || 
              (in_array($bairroAluno, $baixa) && in_array($bairroProfessor, $zonaNordeste))) {
        return 1400;
    } elseif ((in_array($bairroProfessor, $baixa) && in_array($bairroAluno, $zonaPerif1)) || 
              (in_array($bairroAluno, $baixa) && in_array($bairroProfessor, $zonaPerif1)) || 
              (in_array($bairroProfessor, $baixa) && in_array($bairroAluno, $zonaPerif2)) || 
              (in_array($bairroAluno, $baixa) && in_array($bairroProfessor, $zonaPerif2)) || 
              (in_array($bairroProfessor, $baixa) && in_array($bairroAluno, $zonaPerif3)) || 
              (in_array($bairroAluno, $baixa) && in_array($bairroProfessor, $zonaPerif3))) {
        return 1000;
    } elseif ((in_array($bairroProfessor, $baixa) && in_array($bairroAluno, $zonaSul)) || 
              (in_array($bairroAluno, $baixa) && in_array($bairroProfessor, $zonaSul))) {
        return 1500;
    }

    // Zona Nordeste vs Periféricas/Sul
    if ((in_array($bairroProfessor, $zonaNordeste) && in_array($bairroAluno, $zonaPerif1)) || 
        (in_array($bairroAluno, $zonaNordeste) && in_array($bairroProfessor, $zonaPerif1)) || 
        (in_array($bairroProfessor, $zonaNordeste) && in_array($bairroAluno, $zonaPerif2)) || 
        (in_array($bairroAluno, $zonaNordeste) && in_array($bairroProfessor, $zonaPerif2)) || 
        (in_array($bairroProfessor, $zonaNordeste) && in_array($bairroAluno, $zonaPerif3)) || 
        (in_array($bairroAluno, $zonaNordeste) && in_array($bairroProfessor, $zonaPerif3))) {
        return 800;
    } elseif ((in_array($bairroProfessor, $zonaNordeste) && in_array($bairroAluno, $zonaSul)) || 
              (in_array($bairroAluno, $zonaNordeste) && in_array($bairroProfessor, $zonaSul))) {
        return 1200;
    }

    // Regras Periféricas
    if ((in_array($bairroProfessor, $zonaPerif1) && in_array($bairroAluno, $zonaPerif1) && $bairroProfessor !== $bairroAluno) || 
        (in_array($bairroProfessor, $zonaPerif2) && in_array($bairroAluno, $zonaPerif2) && $bairroProfessor !== $bairroAluno) || 
        (in_array($bairroProfessor, $zonaPerif3) && in_array($bairroAluno, $zonaPerif3) && $bairroProfessor !== $bairroAluno)) {
        return 400;
    } elseif ((in_array($bairroProfessor, $zonaPerif1) && in_array($bairroAluno, $zonaPerif2)) || 
              (in_array($bairroAluno, $zonaPerif1) && in_array($bairroProfessor, $zonaPerif2)) || 
              (in_array($bairroProfessor, $zonaPerif1) && in_array($bairroAluno, $zonaPerif3)) || 
              (in_array($bairroAluno, $zonaPerif1) && in_array($bairroProfessor, $zonaPerif3))) {
        return 400;
    }

    // Periféricas vs Sul
    if ((in_array($bairroProfessor, $zonaPerif1) && in_array($bairroAluno, $zonaSul)) || 
        (in_array($bairroAluno, $zonaPerif1) && in_array($bairroProfessor, $zonaSul)) || 
        (in_array($bairroProfessor, $zonaPerif2) && in_array($bairroAluno, $zonaSul)) || 
        (in_array($bairroAluno, $zonaPerif2) && in_array($bairroProfessor, $zonaSul))) {
        return 800;
    }

    // Regra Zona Sul
    if (in_array($bairroProfessor, $zonaSul) && in_array($bairroAluno, $zonaSul) && $bairroProfessor !== $bairroAluno) {
        return 400;
    }

    // Caso não haja uma regra definida
    return null;
}
?>