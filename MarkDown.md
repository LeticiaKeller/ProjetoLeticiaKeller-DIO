# MarkDown :notebook_with_decorative_cover:

O Markdown funciona como um conversor de texto para HTML: os caracteres não-alfabéticos são traduzidos como `<b>`, `<i>` e `<a href>`, etc. Já os textos sem formatação entram como parágrafo simples `<p>`.

#### Títulação 

O símbolo usado para formatar um título em Markdown é a cequilha `#`. Na construção do título formate o código colocando uma cerquilha no inicio da linha, demarcando o cabeçalho.

A quantidade de cerquilhas que você utiliza no inicio da linha indica o nível do título, sendo assim, a formatação `### Meu título` cria um cabeçalho de nível 3.

#### Ênfase

Para adicionar ênfase ao conteúdo que será escrito, usa-se o asterisco `*` ou traço-baixo (*underline*) `_`:

- **Negrito**: adicione dois asteriscos ****texto**** ou dois traços-baixos __**texto**__ no início e no fim do conteúdo.
- **Itálico**: adicione apenas um asterisco **texto** ou um traço-baixo _*texto*_ no início e no fim do conteúdo.

#### Links

Existem duas formas de inserir link em Markdown, através de um **link direto** ou usando um **texto-âncora**:

- **Texto-âncora**: utilize os caracteres `[]()`, adicionando entre chaves o texto que você quer que apareça, e entre os parênteses, o endereço de destino, no formato `[exemplo](https://exemplo.com/)`.
- **Link direto**: envolva o endereço da web em chaves `<>`. O endereço ficará visível e será clicável pelo usuário. O endereço em forma de link direto tem o formato `<https://exemplo.com/>`.

#### Listar de itens

Para listas não ordenadas, utilize um asterisco `*` na frente to item da lista

Para listas ordenadas, utilize o número do item seguido de ponto `.` 

####  Imagens

O código para inserir uma imagem no conteúdo é semelhante ao código de inserir links-âncora, adicionando um ponto de exclamação `!`

#### Citação

Para transformar um texto em uma citação ou comentário, semelhante ao código HTML `<blockquote>`, utilize o sinal `>` no início da linha que será formatada

#### Código

Há dois modos de adicionar trechos de código ao Markdown:

- **Código em linha** (*inline*): adicione um acento grave `ˋ` no início e no final do código.

- **Múltiplas linhas de código**: envolva as linhas de código com três acentos graves `ˋˋˋ` ou três tils `~~~`.

  Para especificar que tipo de linguagem está sendo apresentada no bloco de códigos adicionando o nome da linguagem de programação após o `ˋˋˋ` ou `~~~`, por exemplo `~~~javascript` ou `~~~ruby`. 

#### Tabela

Escolha os títulos das colunas e use `|` para delimitar as colunas. Depois, utilize hífen `-` na segunda linha para indicar que acima estão os títulos das colunas, usando novamente o `|` para delimitar colunas.

Para especificar o tipo de alinhamento que deseja ter nas tabelas, utilize `:` ao lado do campo horizontal de hífens `---`, na segunda linha da sua tabela. Veja abaixo:

- **Alinhado a esquerda**: usar `:` no lado esquerdo (alinhamento padrão);
- **Alinhado a direita**: usar `:` no lado direito;
- **Centralizado**: usar `:` dos dois lados.

O Markdown oferece uma sintaxe diferente para construir títulos de níveis 1 e 2. Ao invés de usar a cerquilha no início da linha, adicione abaixo do título sinais de igual `==` para cabeçalhos de nível 1 e sinais de menos `--` para cabeçalhos de nível 2.

Alguns editores Markdown permitem que você use somente um sinal de igual `=` ou um traço `-` embaixo do texto, mas isso pode gerar problemas de formatação em outros editores que não são compatíveis com essa sintaxe.