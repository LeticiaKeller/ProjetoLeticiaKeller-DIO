# HTML :globe_with_meridians:

```
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Document</title>
</head>
<body>
<!-- Conteúdo -->
</body>
</html>
```

**Linha 1**: a instrução DOCTYPE deve ser sempre a primeira a aparecer em uma página HTML para indicar ao browser qual versão da linguagem usada. Nesse caso, estamos trabalhando com a HTML5, versão na qual a declaração do DOCTYPE é bastante simples, como podemos ver na listagem;

**Linhas 2** e **10**: abertura e fechamento da tag html, que delimita o documento. Sendo assim, todas as demais tags da página devem estar nesse espaço;

**Linhas 3** e **6**: abertura e fechamento da tag head, que define o cabeçalho do documento. O conteúdo nesse espaço não é visível no browser, mas contém instruções sobre seu conteúdo e comportamento.

**Linha 4**: a tag meta, nesse caso, especifica qual conjunto de caracteres (character set ou charset) será usado para renderizar o texto da página. O UTF-8 contém todos os caracteres dos padrões Unicode e ASCII, sendo, portanto, o mais utilizado em páginas web. A mesma tag meta, porém com outros atributos, pode ser utilizada para outros fins, como na SEO (Search Engine Optimization);

**Linha 5**: a tag title define o título da página, aquele que aparece na janela/aba do navegador;

**Linhas 7** e **9**: abertura e fechamento da tag body, marcando o espaço no qual deve estar contido o conteúdo visual da página. As demais tags que representam texto, botões etc. devem ser adicionadas nesse intervalo;

**Linha 8**: nessa linha podemos observar a sintaxe para adição de comentários em HTML. Esse trecho não é renderizado pelo browser.

#### Tags do HTML

Um documento HTML é composto por tags, as quais possuem um nome e aparecem entre os sinais < e >. Algumas tags precisam ser abertas e fechadas, Nesse caso, a tag de fechamento deve conter a barra / antes do nome. Outras, porém, não precisam ser fechadas,Nesses casos, a adição da barra / no final da própria tag.

#### Cabeçalhos do HTML

Cabeçalhos são normalmente utilizados para identificar páginas e seções e possuem aparência diferenciada do restante do texto. No HTML há seis níveis de cabeçalhos/títulos que podem ser utilizados por meio das tags h1, h2, h3, h4, h5 e h6, sendo h1 o maior/mais relevante e h6 o menor/menos relevante.

#### Parágrafos no HTML

Parágrafos de texto são gerados na HTML por meio das tags <p> </p>. Esse é um exemplo de tag cuja disposição na tela se dá em forma de bloco, ou seja, um parágrafo é posto sempre abaixo do outro.

#### Imagens no HTML

A inserção de imagens em uma **página HTML** pode ser feita por meio da tag img, que recebe no atributo src o endereço do arquivo a ser carregado. Além desse, outros dois atributos importantes são o alt, que indica um texto alternativo que será exibido caso o arquivo não possa ser carregado, e title, que indica o texto que aparecerá como tooltip ao passar o mouse sobre a figura.

#### Links no HTML

Links são normalmente utilizados para direcionar o usuário para outras páginas, ou para outras partes da mesma página. Nos dois casos, utilizamos a tag a, que possui o atributo href no qual indicamos o destino daquele link.

#### Tabelas no HTML

Tabelas são elementos utilizados com frequência para exibir dados de forma organizada em linhas e colunas. No HTML, elas são formadas por três tags básicas: table, para delimitar a tabela; tr, para indicar as linhas; e td para formar as colunas.

#### Listas no HTML

Listas são elementos úteis para organizar e ordenar itens que estão relacionados de alguma forma. No HTML é possível criar três tipos de listas: ordenadas (com a tag ol), não ordenadas (com a tag ul), e de definição (por meio da tag dl).

#### Formulários no HTML

Formulários são normalmente utilizados para integrar a página HTML a algum processamento no lado servidor. Nesses casos, a página envia dados para uma aplicação (Java, PHP, .NET etc.), que os recebe, trata e retorna algum resultado.

No HTML, geralmente usamos a tag form para delimitar a área na qual se encontram os campos a serem preenchidos pelo usuário, a fim de serem enviados para processamento no back-end (enquanto a página HTML é chamada de front-end da aplicação).

#### Formatação de texto

As tags de formatação de texto ajudam a destacar trechos da parte escrita da página, seja para fins de SEO ou por requisitos do conteúdo. Formatações como negrito e itálico podem ser aplicadas com facilidade utilizando as várias tags disponíveis para esse fim:

- b e strong para negrito/texto forte;
- i e em para itálico/ênfase;
- sup e sub para sobrescrito e subscrito, respectivamente;
- ins e del para indicar trechos que foram incluídos ou removidos, respectivamente;
- small para textos menores que o padrão;
- mark para texto destacado.

#### Áudio no HTML

Com HTML também é possível inserir áudio e vídeo nas páginas com facilidade. Para áudio, podemos utilizar a tag audio.Na tag audio, o atributo src aponta para o arquivo de áudio que será executado (MP3, OGG ou WAV). Já o atributo controls indica que devem ser exibidos os controles de gerenciamento do áudio (botões play, pause etc.). Além dele, outros também merecem destaque: autoplay, para fazer com que o áudio seja executado assim que for carregado; loop, para que o áudio seja executado repetidas vezes.

#### Vídeo no HTML

Semelhante ao áudio, também podemos inserir vídeos nas páginas HTML utilizando a tag video, adicionada na HTML5. Dessa vez, além dos atributos já vistos no áudio, também precisamos informar a largura (width) e a altura (height) do vídeo, a fim de mantê-lo adequado ao layout.

#### Div e Span no HTML

As divs são normalmente utilizados para representarem containers para outros elementos, agrupando-os visualmente dentro de um bloco que pode conter dimensões e posição definidas. Por padrão, uma div não possui aparência características visuais definidas, isso precisa ser feito via CSS ao atribuir bordas, cores etc. Sua principal característica, no entanto, é que essa tag representa um elemento do tipo bloco, ou seja, que quando adicionado na página, automaticamente gera uma nova linha no layout (semelhante a um parágrafo), ao invés de ser alocado lateralmente nos demais componentes.