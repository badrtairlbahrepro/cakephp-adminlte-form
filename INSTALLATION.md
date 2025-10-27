# Guide d'Installation - AdminLTE Form Helper

## 🚀 Installation

### Étape 1 : Installation via Composer

#### Depuis GitHub

```bash
composer require badrtairlbahrepro/cakephp-adminlte-form
```

#### Depuis GitLab Interne

Ajoutez à votre `composer.json` :

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://gitlab.company.com/devteam/cakephp-adminlte-form.git"
        }
    ],
    "require": {
        "badrtairlbahrepro/cakephp-adminlte-form": "dev-main"
    },
    "minimum-stability": "dev"
}
```

Puis :

```bash
composer install
```

---

## ⚙️ Configuration

### Étape 1 : Charger le Plugin

Dans votre fichier `src/Application.php` (CakePHP 5) :

```php
public function bootstrap(): void
{
    parent::bootstrap();
    
    // Charger le plugin AdminLteForm
    $this->addPlugin('AdminLteForm');
}
```

### Étape 2 : Activer le Helper

#### Option 1 : Globalement dans AppController (Recommandé)

Dans votre fichier `src/Controller/AppController.php` :

```php
public function beforeRender(\Cake\Event\EventInterface $event): void
{
    parent::beforeRender($event);
    
    // Charger le helper AdminLteForm pour TOUTES les vues
    $this->viewBuilder()->addHelper('AdminLteForm.AdminLteForm');
}
```

#### Option 2 : Dans un Contrôleur Spécifique

```php
public function initialize(): void
{
    parent::initialize();
    
    // Charger le helper uniquement pour ce contrôleur
    $this->viewBuilder()->addHelper('AdminLteForm.AdminLteForm');
}
```

---

## 📖 Utilisation

### Dans vos Templates

Une fois le helper chargé, utilisez-le dans n'importe quelle vue :

```php
<!-- Formulaire simple -->
<?= $this->AdminLteForm->textInput('name', [
    'label' => ['text' => 'Nom complet'],
    'placeholder' => 'Votre nom'
]) ?>

<?= $this->AdminLteForm->emailInput('email') ?>

<?= $this->AdminLteForm->passwordInput('password') ?>

<?= $this->AdminLteForm->submitButton('Envoyer') ?>
```

---

## 🎯 Exemples Disponibles (FormBuilderController)

Le plugin inclut un contrôleur de démonstration avec des exemples complets.

### Activer les Routes de Démonstration

Dans votre fichier `config/routes.php` :

```php
/**
 * FormBuilder Routes - Plugin AdminLteForm
 */
$builder->scope('/form-builder', function (RouteBuilder $routes) {
    $routes->connect('/', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'index']);
    $routes->connect('/contact', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'contact']);
    $routes->connect('/register', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'register']);
    $routes->connect('/profile', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'profile']);
    $routes->connect('/search', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'search']);
    $routes->connect('/multiple', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'multiple']);
    $routes->connect('/switches', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'switches']);
});
```

### Accéder aux Exemples

- **Accueil** : `http://localhost:8765/form-builder`
- **Contact** : `http://localhost:8765/form-builder/contact`
- **Inscription** : `http://localhost:8765/form-builder/register`
- **Profil** : `http://localhost:8765/form-builder/profile`
- **Recherche** : `http://localhost:8765/form-builder/search`
- **Sélecteurs Multiples** : `http://localhost:8765/form-builder/multiple`
- **Switches** : `http://localhost:8765/form-builder/switches`

---

## 📋 Liste des Méthodes

| Méthode | Description |
|---------|-------------|
| `textInput()` | Champ texte avec icône |
| `emailInput()` | Champ email |
| `passwordInput()` | Mot de passe avec toggle |
| `textareaInput()` | Zone de texte |
| `fileInput()` | Upload de fichier |
| `selectInput()` | Liste déroulante |
| `selectMultipleInput()` | Sélecteur multiple |
| `checkboxInput()` | Case à cocher |
| `radioInput()` | Bouton radio |
| `switchInput()` | Switch (Toggle) |
| `submitButton()` | Bouton d'envoi |
| `resetButton()` | Bouton reset |

---

## ⚙️ Requis

- PHP >= 8.1
- CakePHP >= 5.0
- AdminLTE 3.x
- FontAwesome 6.x
- jQuery 3.x
- Bootstrap 5.x

---

## 🎨 Inclure les Assets

Dans votre layout (`templates/layout/default.php`) :

```html
<!-- CSS AdminLTE -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- jQuery + Bootstrap + AdminLTE -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
```

---

## 🐛 Dépannage

### Le helper ne se charge pas

1. Vérifier que le plugin est chargé dans `src/Application.php`
2. Vérifier que le helper est ajouté dans `AppController::beforeRender()`
3. Vider le cache : `rm -rf tmp/cache/*`

### Erreur de namespace

Assurez-vous d'utiliser : `AdminLteForm\View\Helper\AdminLteFormHelper`

---

## 📚 Documentation Complète

Voir `README.md` pour plus de détails sur toutes les méthodes disponibles.

