<link rel="stylesheet" href="{{url('css/test.css')}}">
<div id="language-selector">
  <button data-language="en">English</button>
  <button data-language="fr">Français</button>
  <button data-language="es">Español</button>
</div>

<div id="content">
  <h1>Hello, world!</h1>
  <p>This is a paragraph.</p>
</div>

<script>
const languages = {
  en: {
    hello: 'Hello, world!',
    paragraph: 'This is a paragraph.'
  },
  fr: {
    hello: 'Bonjour, le monde!',
    paragraph: 'Ceci est un paragraphe.'
  },
  es: {
    hello: '¡Hola, mundo!',
    paragraph: 'Este es un párrafo.'
  }
};

const content = document.getElementById('content');
const languageSelector = document.getElementById('language-selector');

languageSelector.addEventListener('click', event => {
  if (event.target.tagName === 'BUTTON') {
    const language = event.target.dataset.language;
    const translations = languages[language];
    content.querySelector('h1').textContent = translations.hello;
    content.querySelector('p').textContent = translations.paragraph;
  }
});
</script>