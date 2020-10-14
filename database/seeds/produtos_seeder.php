<?php

use Illuminate\Database\Seeder;
use App\ProdutoModel;

class produtos_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $produto = new ProdutoModel();
      $produto->nome = "Ração Golden 15kg";
      $produto->preco = 29.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Golden";
      $produto->imagem = "racao1.jpg";
      $produto->comentários = "- Prós: Melhora o aspecto do pêlo, as fezes e urina. - Contras: Nenhum";
      $produto->nota = 2;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração Magnus para cachorro 2kg";
      $produto->preco = 19.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Magnus";
      $produto->imagem = "racao2.jpg";
      $produto->comentários = "- Prós: Embalagem de 25kg. - Contras: Não é atrativa";
      $produto->nota = 2;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração Dog Chow 2kg";
      $produto->preco = 25.49;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Purina";
      $produto->imagem = "racao3.jpg";
      $produto->comentários = "Bacana";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração Champ";
      $produto->preco = 25.49;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Champ";
      $produto->imagem = "racao4.jpg";
      $produto->comentários = "Melhor custo benefício da ração standard, minha cadela não e enjooa";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração Magnus Carne";
      $produto->preco = 23.99;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Magnus";
      $produto->imagem = "racao5.jpg";
      $produto->nota = 4.5;
      $produto->comentários = "Muito bom";
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração HotDog";
      $produto->preco = 23.99;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "HotDog";
      $produto->imagem = "racao6.jpg";
      $produto->comentários = "Razoável";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração Magnus";
      $produto->preco = 15.99;
      $produto->tipo_produto = "ração";
      $produto->categoria = "cachorro";
      $produto->marca = "Magnus";
      $produto->imagem = "racao5.jpg";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Cama para cachorro";
      $produto->preco = 49.99;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "cachorro";
      $produto->marca = "Pet Amor";
      $produto->imagem = "produto8.jpg";
      $produto->comentários = "Muito bom";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Petisco para gato";
      $produto->preco = 22.99;
      $produto->tipo_produto = "petisco";
      $produto->categoria = "gato";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto1.jpg";
      $produto->comentários = "Bom";
      $produto->nota = 3.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Escova de pelos";
      $produto->preco = 14.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "gato";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto2.jpg";
      $produto->comentários = "Muito bom, achei eficiente";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Cama para gato";
      $produto->preco = 45.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "gato";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto3.jpg";
      $produto->comentários = "Muito bom";
      $produto->nota = 4.0;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Caixa de areia";
      $produto->preco = 39.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "gato";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto4.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Arranhador";
      $produto->preco = 59.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "gato";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto5.jpeg";
      $produto->comentários = "";
      $produto->nota = 3.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Brinquedo para cachorro";
      $produto->preco = 9.90;
      $produto->tipo_produto = "brinquedo";
      $produto->categoria = "cachorro";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto6.png";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Cama para gato";
      $produto->preco = 49.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "gato";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto7.jpg";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Cama para cachorro";
      $produto->preco = 99.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "cachorro";
      $produto->marca = "Lorem Ipsum";
      $produto->imagem = "produto8.jpg";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para tartaruga";
      $produto->preco = 9.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "tartaruga";
      $produto->marca = "Mega Zoo";
      $produto->imagem = "produto9.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para canários";
      $produto->preco = 29.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "aves";
      $produto->marca = "Reino das Aves";
      $produto->imagem = "produto10.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para peixes";
      $produto->preco = 19.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "peixe";
      $produto->marca = "Alcon";
      $produto->imagem = "produto11.jpg";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para gatos";
      $produto->preco = 11.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "gato";
      $produto->marca = "Whiskas";
      $produto->imagem = "produto12.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para gatos Friskies";
      $produto->preco = 21.90;
      $produto->tipo_produto = "ração";
      $produto->categoria = "gato";
      $produto->marca = "Purina";
      $produto->imagem = "produto13.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Peixe de brinquedo para gatos";
      $produto->preco = 99.90;
      $produto->tipo_produto = "brinquedo";
      $produto->categoria = "gato";
      $produto->marca = "Cat Eletronics";
      $produto->imagem = "produto14.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Alimentador automático";
      $produto->preco = 89.90;
      $produto->tipo_produto = "higiene e bem-estar";
      $produto->categoria = "tartaruga";
      $produto->marca = "Lorem ipsum";
      $produto->imagem = "sem-imagem.jpg";
      $produto->comentários = "";
      $produto->nota = 2.5;
      $produto->save();

      ///remédios///

      $produto = new ProdutoModel();
      $produto->nome = "Remédio anti-inflamatório";
      $produto->preco = 29.90;
      $produto->tipo_produto = "remédio";
      $produto->categoria = "cachorro";
      $produto->marca = "MSD";
      $produto->imagem = "remedio-cachorro-1.jpg";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Remédio contra sarna e carrapatos";
      $produto->preco = 29.90;
      $produto->tipo_produto = "remédio";
      $produto->categoria = "cachorro";
      $produto->marca = "MSD";
      $produto->imagem = "remedio-cachorro-2.jpg";
      $produto->comentários = "";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Remédio Vermicida";
      $produto->preco = 15.20;
      $produto->tipo_produto = "remédio";
      $produto->categoria = "gato";
      $produto->marca = "Bayer";
      $produto->imagem = "remedio-gato-1.jpg";
      $produto->comentários = "";
      $produto->nota = 3.7;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Doxitrat antibiótico";
      $produto->preco = 21.55;
      $produto->tipo_produto = "remédio";
      $produto->categoria = "gato";
      $produto->marca = "Bayer";
      $produto->imagem = "remedio-gato-2.jpg";
      $produto->comentários = "";
      $produto->nota = 3.7;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Anti-inflamatório para gatos";
      $produto->preco = 34.55;
      $produto->tipo_produto = "remédio";
      $produto->categoria = "gato";
      $produto->marca = "Ouro Fino";
      $produto->imagem = "remedio-gato-3.jpg";
      $produto->comentários = "";
      $produto->nota = 4.0;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Areia Sanitária Kelco Pipicat Sílica Cristal";
      $produto->preco = 26.01;
      $produto->tipo_produto = "areia";
      $produto->categoria = "gato";
      $produto->marca = "Pipicat";
      $produto->imagem = "areia1.jpg";
      $produto->comentários = "a areia é ótima, realmente não deixa cheiro, é sequinha e causa menos sujeira ao redor da caixinha, depois que comprei a de sílica não compro outra mais.";
      $produto->nota = 3.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Pá Higiênica Pet Injet Power Clean Prata";
      $produto->preco = 17.09;
      $produto->tipo_produto = "Pa de limpeza";
      $produto->categoria = "gato";
      $produto->marca = "Pet Injet";
      $produto->imagem = "pazinha1.jpg";
      $produto->comentários = "Pá grande e o granulado limpo passa pelo vão, ficando apenas o bloco formado pelo xixi e cocô do gato. É firme, o que ajuda no manuseio. Prós: Fácil manuseio, prático, material excelente sem rebarbas.";
      $produto->nota = 3.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Cortador de Unhas Chalesco para Gatos - Grande";
      $produto->preco = 17.63;
      $produto->tipo_produto = "cortador unha";
      $produto->categoria = "gato";
      $produto->marca = "Chalesco";
      $produto->imagem = "tesoura1.jpg";
      $produto->comentários = "Foi alem da minhas expectativas, bom acabamento do produto.Prós: atende ao uso para gatos. Contras: o espaço para colocar os dedos é padrão então quem tem o dedo gordinho vai ficar um pouquinho preso.rs";
      $produto->nota = 2.7;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração Seca Nutrilus Pro Frango 15kg";
      $produto->preco = 89.91;
      $produto->tipo_produto = "ração cachorro";
      $produto->categoria = "cachorro";
      $produto->marca = "Nutrilus";
      $produto->imagem = "racaonutri.jpg";
      $produto->comentários = "Ótima. Prós: Sacia a fome e sabor agradável.";
      $produto->nota = 4.6;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Escova Dental Truqys Pets Azul para Cães";
      $produto->preco = 26.91;
      $produto->tipo_produto = "brinquedo";
      $produto->categoria = "cachorro";
      $produto->marca = "Truqys Pets";
      $produto->imagem = "dental.jpg";
      $produto->comentários = "Prós: Bem macio e um cheiro incrível. Contras: Achei material frágil";
      $produto->nota = 5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração Zootekna Mistura Agapórnis e Calopsita ";
      $produto->preco = 5.39;
      $produto->tipo_produto = "ração";
      $produto->categoria = "passaro";
      $produto->marca = "Zootekna";
      $produto->imagem = "racaopassaro.jpg";
      $produto->comentários = "Animais comem porém não sacia. Contras: Vem muito arroz e semente girassol periquito australiano não comem";
      $produto->nota = 3.7;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração Zootekna para Jabuti";
      $produto->preco = 16.55;
      $produto->tipo_produto = "ração";
      $produto->categoria = "repteis";
      $produto->marca = "Zootekna";
      $produto->imagem = "produto15.jpg";
      $produto->comentários = "Comprei a ração bem animada pela quantidade de nutrientes e vitaminas, mas meu pet não curtiu muito não.";
      $produto->nota = 3.2;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração Nutral Ouro para Tartarugas e Cágados - 1,3 Kg";
      $produto->preco = 16.55;
      $produto->tipo_produto = "ração";
      $produto->categoria = "repteis";
      $produto->marca = "Nutral";
      $produto->imagem = "produto16.jpg";
      $produto->comentários = "Prós: as tartarugas adora. Contras: camarãozinho elas gosta muito mais não tem as proteínas q precisa";
      $produto->nota = 2.8;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Ração para Iguana e Jabuti - 100 g";
      $produto->preco = 23.31;
      $produto->tipo_produto = "ração";
      $produto->categoria = "repteis";
      $produto->marca = "Zootekna";
      $produto->imagem = "produto17.jpg";
      $produto->comentários = " A ração é bem feita,com grãos e legumes e frutas desidratados, o cheiro é gostoso";
      $produto->nota = 4;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Cama Carlu Pet House Half Moon Dourado";
      $produto->preco = 278.91;
      $produto->tipo_produto = "cama";
      $produto->categoria = "cachorro";
      $produto->marca = "Carlu Pet House";
      $produto->imagem = "produto18.jpg";
      $produto->comentários = " Boa, mas não vale o preço";
      $produto->nota = 3.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Manta Fábrica Pet Itália - Rosa";
      $produto->preco = 71.91;
      $produto->tipo_produto = "cama";
      $produto->categoria = "cachorro";
      $produto->marca = "Fábrica Pet";
      $produto->imagem = "produto19.jpg";
      $produto->comentários = " Minha Gin adorou!!! Mas o tamanho é pequeno, serve para filhotes, logo ela deixara de usar. Prós: Macia, quentinha.  Contras: Pequena.";
      $produto->nota = 4.2;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Escada Fabrica Pet Suede Preto com Cinza";
      $produto->preco = 179.91;
      $produto->tipo_produto = "escada";
      $produto->categoria = "cachorro";
      $produto->marca = "Fábrica Pet";
      $produto->imagem = "produto20.jpg";
      $produto->comentários = "Minha cachorrinha é uma Pug ela tem 8 kg e ficou muito insegura pra subir ou descer.";
      $produto->nota = 3.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Catnip Chalesco Erva de Gato - 10 g";
      $produto->preco = 17.91;
      $produto->tipo_produto = "brinquedo";
      $produto->categoria = "gato";
      $produto->marca = "Chalesco";
      $produto->imagem = "produto21.jpg";
      $produto->comentários = "Vem bastante, os gatos adoram e a embalagem é bem prática.";
      $produto->nota = 4.8;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Brinquedo American Pets Vinil Ratinho com Apito";
      $produto->preco = 4.41;
      $produto->tipo_produto = "brinquedo";
      $produto->categoria = "gato";
      $produto->marca = "American Pets";
      $produto->imagem = "produto22.jpg";
      $produto->comentários = "Meus gatos amaram, brincaram até não existir mais ratinho kkkkk";
      $produto->nota = 3.9;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Brinquedo Chalesco Kitty Ball Cores Variadas";
      $produto->preco = 41;
      $produto->tipo_produto = "brinquedo";
      $produto->categoria = "gato";
      $produto->marca = "Chalesco";
      $produto->imagem = "produto23.jpg";
      $produto->comentários = "Pra filhotes deve ser perfeito, mas para gatos grandes os buracos são muito pequenos.";
      $produto->nota = 3.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Spray Erva do Gato CatMyPet Catnip";
      $produto->preco = 26.91;
      $produto->tipo_produto = "brinquedo";
      $produto->categoria = "gato";
      $produto->marca = "CatMyPet";
      $produto->imagem = "produto24.jpg";
      $produto->comentários = "Meu gato não deu a mínima. Prós: Nenhum. Contras: Muito fraco";
      $produto->nota = 2;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Brinquedo Interativo Pet Games Cat Pizza";
      $produto->preco = 22.58;
      $produto->tipo_produto = "brinquedo";
      $produto->categoria = "gato";
      $produto->marca = "Pet Games";
      $produto->imagem = "produto25.jpg";
      $produto->comentários = "Veio tudo certinho, é fácil de montar e o meu baby felino amou demais!";
      $produto->nota = 5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Brinquedo Furacão Pet Cat Box - Gato";
      $produto->preco = 46.65;
      $produto->tipo_produto = "brinquedo";
      $produto->categoria = "gato";
      $produto->marca = "Furacão Pet";
      $produto->imagem = "produto26.jpg";
      $produto->comentários = "Ficou lindo na sala, está substituindo as caixas de papelão que estavam feias aqui. Eles adoraram se esconder nela";
      $produto->nota = 4.6;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Peitoral e Guia Toh Outdoor Eclipse";
      $produto->preco = 41.39;
      $produto->tipo_produto = "coleira";
      $produto->categoria = "cachorro";
      $produto->marca = "Toh";
      $produto->imagem = "produto27.jpg";
      $produto->comentários = "Prós: Ótima qualidade, a guia tem um ótimo tamanho!";
      $produto->nota = 3.8;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Peitoral H e Guia Toh Outdoor Scott";
      $produto->preco = 50.39;
      $produto->tipo_produto = "coleira";
      $produto->categoria = "cachorro";
      $produto->marca = "Toh";
      $produto->imagem = "produto28.jpg";
      $produto->comentários = "Ficou perfeito no corpo do meu pet, bem confortável e muito linda. Prós: Tecido muito bom. Contras: Não têm";
      $produto->nota = 4;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Coleira Bellbold Summer Rain para Cães";
      $produto->preco = 29.69;
      $produto->tipo_produto = "coleira";
      $produto->categoria = "cachorro";
      $produto->marca = "Bellbold";
      $produto->imagem = "produto29.jpg";
      $produto->comentários = "Ficou certinho na minha dog, não incomoda. Prós: Confortável. Contras: Nenhum";
      $produto->nota = 3.7;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Roupa Pet Med Pós Castração ";
      $produto->preco = 43;
      $produto->tipo_produto = "roupa";
      $produto->categoria = "cachorro";
      $produto->marca = "Pet Med";
      $produto->imagem = "produto30.jpg";
      $produto->comentários = "Bom. Contras: Aonde tem o zíper poderia ter uma proteção na hora de subir o zíper.";
      $produto->nota = 2.4;
      $produto->save();


      $produto = new ProdutoModel();
      $produto->nome = "Fantasia Futon Dog de Vampiro";
      $produto->preco = 87.50;
      $produto->tipo_produto = "roupa";
      $produto->categoria = "cachorro";
      $produto->marca = "Futon Dog";
      $produto->imagem = "produto31.jpg";
      $produto->comentários = "Prós: sao confortaveis e todos os pugs vao amar e adorar e gostar. Contras: nada";
      $produto->nota = 5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Comedouro Ergonômico";
      $produto->preco = 24.05;
      $produto->tipo_produto = "comedouro";
      $produto->categoria = "gato";
      $produto->marca = "NF Pet";
      $produto->imagem = "produto32.jpg";
      $produto->comentários = "Prós: Os gatos passam a comer toda a ração. Contras: Valor né amados!? Não é muito acessível.";
      $produto->nota = 4.7;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Comedouro Pet Games Cat Eats Azul";
      $produto->preco = 31.76;
      $produto->tipo_produto = "comedouro";
      $produto->categoria = "gato";
      $produto->marca = "Pet Games";
      $produto->imagem = "produto33.jpg";
      $produto->comentários = "Problema é que é de plástico. Deveriam fazer de aço inox";
      $produto->nota = 4.5;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Comedouro Porcelana Power Pets Gatinho Meow Branco";
      $produto->preco = 35.91;
      $produto->tipo_produto = "comedouro";
      $produto->categoria = "gato";
      $produto->marca = "Power Pets";
      $produto->imagem = "produto34.jpg";
      $produto->comentários = "Fácil de limpar, tamanho ideal";
      $produto->nota = 2.7;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Fonte Bebedouro Petlon Premium Branca e Dourada";
      $produto->preco = 206;
      $produto->tipo_produto = "bebedouro";
      $produto->categoria = "gato";
      $produto->marca = "Petlon";
      $produto->imagem = "produto35.jpg";
      $produto->comentários = "Prós: Água fresca o tempo todo, fácil para lavar e ainda vem com barulhinho relaxante de cachoeira, minhas gatas adoraram. Contras: Não há";
      $produto->nota = 3.8;
      $produto->save();

      $produto = new ProdutoModel();
      $produto->nome = "Fonte Bebedouro Amicus Aqua Mini Bivolt Branca";
      $produto->preco = 98.91;
      $produto->tipo_produto = "bebedouro";
      $produto->categoria = "gato";
      $produto->marca = "Amicus";
      $produto->imagem = "produto36.jpg";
      $produto->comentários = "Prós: É leve e de fácil limpeza. Contras: É de plástico e frágil , tem que ser lavado todos os dias se não acumula limo";
      $produto->nota = 5;
      $produto->save();

      //factory(ProdutoModel::class, 40)->create();
    }
}
