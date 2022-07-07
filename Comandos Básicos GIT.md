## Comandos Básicos GIT:woman_technologist:

#### Windows

- #### cmd **(**prompt de comando**)**

- #### cd ... **(**acessar diretório**)**

- #### dir

- #### mkdir **(**criar pasta**)**

- #### del/rmdir **(**remover diretório**)**

- #### Clear

- #### git config **(**git config --global user.email "coloque seu e-mail aqui"**)**

  Pode ser usado para definir valores de configuração específicos do usuário como e-mail, algoritmo preferido para diff, nome de usuário e formato de arquivo etc.

- #### git init

  É usado para criar um novo repositório GIT.

- #### git add 

  Pode ser usado para adicionar arquivos ao índice. 

- #### git clone

  É usado para fins de verificação de repositório.

- #### git commit **(**git commit –m “coloque sua mensagem aqui”**)**

  É usado para confirmar as alterações na cabeça. Tenha em atenção que quaisquer alterações efetuadas não irão para o repositório remoto.

- #### git status

  Exibe a lista de arquivos alterados juntamente com os arquivos que ainda não foram adicionados ou confirmados.

- #### git push

  Um simples envio envia as alterações feitas para o ramo mestre do repositório remoto associado ao diretório de trabalho.

- #### git checkout

  Pode ser usado para criar ramos ou alternar entre eles.

- #### git remote **(**git remote -v **/** git remote add origin <>**)**

  Permite que um usuário se conecte a um repositório remoto. 

- #### git branch **(**git branch**/**git branch -d <>**)**

  Pode ser usado para listar, criar ou excluir ramos.

- #### git pull

  Para mesclar todas as alterações presentes no repositório remoto para o diretório de trabalho local.

- #### git merge **(**git merge <>**)**

  O comando **git merge** é usado para mesclar uma ramificação no ramo ativo.

- #### git diff **(**git diff --base<>**/**git diff <><>**/**git diff**)**

  O comando **git diff** é usado para listar os conflitos.

- #### git tag **(** git tag 1.1.0 <"insert-commitID-here">**)**

  A marcação é usada para marcar compromissos específicos com alças simples. 

- #### git log 

  Executar o comando **git log** exibe uma lista de compromissos em uma ramificação, juntamente com os detalhes pertinentes.

- #### git reset

  Para redefinir o índice e o diretório de trabalho para o estado do último commit, o comando **git reset** é usado. 

- #### git rm

  Pode ser usado para remover arquivos do índice e do diretório de trabalho.

- #### git stash

  Ajuda a salvar as mudanças que não devem ser cometidos imediatamente, mas em uma base temporária.

- #### git show

  Para visualizar informações sobre qualquer objeto git.

- #### git rebase **(**git rebase master**)**

  É usado para reaplicação de compromissos em outro ramo.

- #### git fsck

  Para executar uma verificação de integridade do sistema de arquivos git.

- #### git prune

  Através do comando **git prune**, os objetos que não têm ponteiros de entrada são excluídos.

- #### git archive **(**git archive --format=tar master**)**

  O comando **git archive** permite que um usuário crie um arquivo zip ou tar contendo os componentes de uma única árvore de repositório. 

- #### git gc

  Para otimizar o repositório através da coleta de lixo, que irá limpar arquivos desnecessários e otimizá-los.

- #### git instaweb **(**git instaweb –httpd=webrick**)**

  Um servidor web pode ser executado em interface com o repositório local. Um navegador da Web também é automaticamente direcionado para ele.

- #### gitk

  É a interface gráfica para um repositório local que pode ser invocado digitando e executando.

- #### gim grep **(**git grep ""**)**

  Permite que um usuário procure através das árvores de conteúdo frases e / ou palavras.

- #### git cat-file **(**git cat-file –p ""**)**

  Usando o valor SHA-1, exiba o tipo de um objeto usando o comando.

- #### git ls-tree

  Para exibir um objeto de árvore juntamente com o nome e o modo de cada item e o valor SHA-1 do blob.

- #### git fetch **(**git fetch origin**)**

  Permite que um usuário obtenha todos os objetos do repositório remoto que atualmente não residem no diretório de trabalho local.