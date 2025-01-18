git init <!-- Cria um repositório vazio -->
git status <!-- Verifar status do repositório -->
git checkout -b nome_da_branch <!-- Cria uma nova branch -->
git branch -d nome-da-branch <!-- Deleta a branch local, mas apenas se ela já tiver sido mergeada para a branch atual ou para outra branch. Caso queira forçar, basta mudar o -d para -D -->
git push origin --delete nome-da-branch <!-- Deleta a branch remota (nuvem) -->
git branch <!-- Verifica a branch atual -->
git branch -r <!-- Lista as branchs remotas -->
<!-- Primeiros passos -->
git remote add origin (LINK) <!-- Associa o endereço do repositório da nuvem no computador -->
git pull origin master <!-- Atualiza o seu repositório no computado -->
git add . <!-- Adiciona todos os arquivos na pasta que vai ser enviada para a nuvem -->
git commit -m "mensagem" <!-- Mensagem de commit -->
git push origin master  <!-- Nome do repositório princial no github -->