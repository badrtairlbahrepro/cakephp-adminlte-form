# CakePHP AdminLTE Form Helper

Un helper CakePHP pour créer facilement des formulaires élégants avec le style AdminLTE.

## 🎯 Fonctionnalités

- ✅ **12 méthodes** pour tous les types de champs
- 🎨 **Style AdminLTE** intégré
- 🔧 **Helper CakePHP** natif
- 📱 **Responsive** avec Bootstrap 5
- 🎯 **Icônes FontAwesome** automatiques
- 🔄 **Input Groups** avec icônes
- 📁 **Upload de fichiers** avec prévisualisation
- 🔀 **Sélecteurs multiples** avec Ctrl/Cmd+clic
- 🎛️ **Switches (Toggle)** animés
- ✅ **Validation** Bootstrap

## 🚀 Installation

### Via Composer

```bash
composer require badrtairlbahrepro/cakephp-adminlte-form
```

### Depuis un repository VCS (GitHub/GitLab)

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/badrtairlbahrepro/cakephp-adminlte-form.git"
        }
    ],
    "require": {
        "badrtairlbahrepro/cakephp-adminlte-form": "dev-main"
    },
    "minimum-stability": "dev"
}
```

## 📖 Configuration

### 1. Charger le Plugin

```php
// src/Application.php (CakePHP 5)
public function bootstrap(): void
{
    parent::bootstrap();
    
    // Load the AdminLteForm plugin
    $this->addPlugin('AdminLteForm');
}
```

### 2. Activer le Helper

```php
// src/Controller/AppController.php
public function beforeRender(\Cake\Event\EventInterface $event): void
{
    parent::beforeRender($event);
    
    // Load the AdminLteForm helper globally
    $this->viewBuilder()->addHelper('AdminLteForm.AdminLteForm');
}
```

### 3. Inclure les Assets

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

## 📋 Méthodes Disponibles

| Méthode | Description | Exemple |
|---------|-------------|---------|
| `textInput()` | Champ texte avec icône | `$this->AdminLteForm->textInput('name')` |
| `emailInput()` | Champ email | `$this->AdminLteForm->emailInput('email')` |
| `passwordInput()` | Mot de passe avec toggle | `$this->AdminLteForm->passwordInput('password')` |
| `textareaInput()` | Zone de texte | `$this->AdminLteForm->textareaInput('message')` |
| `fileInput()` | Upload de fichier | `$this->AdminLteForm->fileInput('avatar')` |
| `selectInput()` | Liste déroulante | `$this->AdminLteForm->selectInput('country')` |
| `selectMultipleInput()` | Sélecteur multiple | `$this->AdminLteForm->selectMultipleInput('skills')` |
| `checkboxInput()` | Case à cocher | `$this->AdminLteForm->checkboxInput('newsletter')` |
| `radioInput()` | Bouton radio | `$this->AdminLteForm->radioInput('theme')` |
| `switchInput()` | Switch (Toggle) | `$this->AdminLteForm->switchInput('notifications')` |
| `submitButton()` | Bouton d'envoi | `$this->AdminLteForm->submitButton('Envoyer')` |
| `resetButton()` | Bouton reset | `$this->AdminLteForm->resetButton('Annuler')` |

## 💡 Exemple Rapide

```php
<?= $this->Form->create(null, ['class' => 'form-horizontal']) ?>
<div class="card-body">
    <!-- Champ texte -->
    <?= $this->AdminLteForm->textInput('name', [
        'label' => ['text' => 'Nom complet'],
        'placeholder' => 'Votre nom',
        'templateVars' => ['icon' => 'fas fa-user']
    ]) ?>

    <!-- Champ email -->
    <?= $this->AdminLteForm->emailInput('email', [
        'label' => ['text' => 'Email'],
        'placeholder' => 'votre@email.com'
    ]) ?>

    <!-- Mot de passe -->
    <?= $this->AdminLteForm->passwordInput('password', [
        'label' => ['text' => 'Mot de passe']
    ]) ?>

    <!-- Zone de texte -->
    <?= $this->AdminLteForm->textareaInput('message', [
        'label' => ['text' => 'Message'],
        'rows' => 4
    ]) ?>
</div>
<div class="card-footer text-right">
    <?= $this->AdminLteForm->resetButton('Annuler', ['class' => 'btn btn-secondary mr-2']) ?>
    <?= $this->AdminLteForm->submitButton('Envoyer', ['class' => 'btn btn-primary']) ?>
</div>
<?= $this->Form->end() ?>
```

## 🎨 Options Principales

```php
[
    'label' => ['text' => 'Label du champ'],
    'placeholder' => 'Texte d\'aide',
    'class' => 'classes-css-additionnelles',
    'templateVars' => ['icon' => 'fas fa-icon'],
    'value' => 'valeur-par-defaut',
    'checked' => true, // pour checkbox/radio
    'name' => 'nom-du-champ' // pour radio
]
```

## ⚠️ Points Importants

1. **Charger le helper** dans `AppController::beforeRender()`
2. **Upload de fichiers** : Ajouter `enctype="multipart/form-data"` au formulaire
3. **Boutons radio** : Utiliser le même `name` pour les grouper
4. **Icônes** : FontAwesome doit être chargé
5. **Bootstrap** : AdminLTE nécessite Bootstrap 5

## 🐛 Dépannage

### Labels dupliqués

```php
// ❌ Incorrect
<?= $this->AdminLteForm->textInput('name', ['label' => 'Nom']) ?>

// ✅ Correct
<?= $this->AdminLteForm->textInput('name', [
    'label' => ['text' => 'Nom'],
    'div' => false
]) ?>
```

### Upload de fichiers

```php
// ✅ Correct
<?= $this->Form->create(null, ['enctype' => 'multipart/form-data']) ?>
```

## 📚 Requirements

- PHP >= 8.1
- CakePHP >= 5.0
- AdminLTE 3.x
- FontAwesome 6.x

## 📄 License

MIT License - see LICENSE file

## 🔗 Links

- **GitHub** : https://github.com/badrtairlbahrepro/cakephp-adminlte-form
- **Issues** : https://github.com/badrtairlbahrepro/cakephp-adminlte-form/issues

## 👤 Author

Badr TairlBahre

## 🎯 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

