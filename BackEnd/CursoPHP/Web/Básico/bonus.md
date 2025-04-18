1. **Importância do Versionamento**
   - O versionamento é feito através de tags no Git.
   - Cada versão é definida por um número que segue o esquema de versionamento semântico (SemVer).

2. **Esquema de Versionamento Semântico (SemVer)**
   - **MAJOR**: Indica quebra de compatibilidade.
   - **MINOR**: Indica adições de funcionalidades sem quebrar o que já existe.
   - **PATCH**: Refere-se a correções de bugs.

3. **Criação de Repositório Git**
   - Como criar um repositório Git e adicionar um arquivo `.gitignore` para evitar que a pasta "vendor" seja versionada.
   - Comandos utilizados:
     - `git init`
     - `git add .`
     - `git commit -m "Primeiro commit"`
     - `git tag -a v1.0.0`

4. **Especificação de Versões no `composer.json`**
   - Formas de especificar versões:
     - Versões exatas
     - Ranges
     - Uso de caracteres especiais:
       - `^` (até a próxima MAJOR)
       - `~` (maior ou igual a uma versão específica)
       - `*` (qualquer versão)
       - `-` (faixa de versões)