<?php

class Router
{
    
    public function handleRequest(array $get) : void
    {
        $bc = new BlogController();
        
        // Vérifie si $_GET["route"] existe
        if (isset($get["route"])) 
            
        {
            // Si $_GET["route"] n'existe pas, appeler la méthode home du BlogController
            $bc = "home";
        }
    }
}