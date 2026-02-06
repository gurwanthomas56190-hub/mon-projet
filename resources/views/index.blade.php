<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silvadec Intranet - Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav class="bg-slate-800 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <span class="text-white text-2xl font-bold tracking-wider">SILVADEC <span class="text-green-400">2026</span></span>
            </div>
            <div class="hidden md:flex items-center space-x-6">
                <a href="/" class="text-white hover:text-green-400 transition">Accueil</a>
                <a href="/annuaire" class="text-gray-300 hover:text-white">Annuaire</a>
                <a href="/documents" class="text-gray-300 hover:text-white">Documents</a>
                <a href="/tasks" class="text-gray-300 hover:text-white">Tâches</a>
                <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition">Mon Profil</button>
            </div>
        </div>
    </nav>

    <header class="bg-white border-b">
        <div class="container mx-auto py-10 px-4">
            <h1 class="text-3xl font-bold text-gray-800">Bienvenue sur votre espace Intranet</h1>
            <p class="text-gray-600 mt-2">Accédez à tous les outils et ressources de Silvadec en un seul endroit.</p>
        </div>
    </header>

    <main class="container mx-auto py-12 px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 border-t-4 border-blue-500">
                <div class="p-8">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center text-blue-500 mb-4">
                        <i class="fa-solid fa-address-book text-2xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Annuaire</h2>
                    <p class="text-gray-600 mb-6">Retrouvez les coordonnées de tous les collaborateurs de l'entreprise.</p>
                    <a href="/annuaire" class="text-blue-500 font-semibold hover:underline">Consulter l'annuaire &rarr;</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 border-t-4 border-green-500">
                <div class="p-8">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center text-green-500 mb-4">
                        <i class="fa-solid fa-file-lines text-2xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Documents</h2>
                    <p class="text-gray-600 mb-6">Accédez aux procédures, fiches techniques et documents partagés.</p>
                    <a href="/documents" class="text-green-500 font-semibold hover:underline">Gérer les documents &rarr;</a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 border-t-4 border-orange-500">
                <div class="p-8">
                    <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center text-orange-500 mb-4">
                        <i class="fa-solid fa-list-check text-2xl"></i>
                    </div>
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Mes Tâches</h2>
                    <p class="text-gray-600 mb-6">Suivez l'avancement de vos projets et les actions à réaliser.</p>
                    <a href="/tasks" class="text-orange-500 font-semibold hover:underline">Voir mes tâches &rarr;</a>
                </div>
            </div>

        </div>

        <div class="mt-12 bg-slate-800 rounded-2xl p-8 text-white flex flex-col md:flex-row items-center justify-between">
            <div class="mb-6 md:mb-0">
                <h3 class="text-2xl font-bold mb-2">Besoin d'aide technique ?</h3>
                <p class="text-slate-300">Contactez le service informatique pour toute demande de support ou d'accès réseau.</p>
            </div>
            <a href="mailto:support@silvadec.fr" class="bg-white text-slate-800 px-8 py-3 rounded-full font-bold hover:bg-green-400 hover:text-white transition">Support IT</a>
        </div>
    </main>

    <footer class="text-center py-8 text-gray-500 text-sm">
        &copy; 2026 Silvadec - Projet BTS CIEL Option A - Réalisé avec Laravel & Docker
    </footer>

</body>
</html>