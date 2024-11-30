class AdminPage {
    // URL halaman admin
    url = 'http://127.0.0.1:8000/admin/login';

    // Elemen pada halaman admin
    emailInput = '#data\\.email';
    passwordInput = 'input[type="password"]';
    loginButton = '.fi-btn:contains("Sign in")';
    dashboardHeader = 'h1'; // Elemen header untuk memastikan login berhasil
    usersMenu = 'a[href="http://127.0.0.1:8000/admin/users"]'; // Elemen untuk menu Users
    newUserButton = 'a[href="http://127.0.0.1:8000/admin/users/create"]'; // Elemen untuk tombol "New user"

    // Elemen untuk menu Categories
    categoriesMenu = 'a[href="http://127.0.0.1:8000/admin/categories"]'; // Elemen untuk menu Categories
    newCategoryButton = 'a[href="http://127.0.0.1:8000/admin/categories/create"]';

    // Elemen untuk form input fields pada halaman create user
    nameInput = '#data\\.name';
    emailInputCreate = '#data\\.email';
    passwordInputCreate = '#data\\.password';
    roleSelect = '#data\\.role';
    createButton = '#key-bindings-1'; // Tombol create user

    // Elemen untuk form input fields pada halaman create category
    nameInput = '#data\\.name';
    createButton = '#key-bindings-1'; // Tombol create user

    // Elemen tombol "Cancel"
    cancelButton = '.fi-btn:contains("Cancel")'; // Tombol Cancel untuk kembali ke halaman Users

    // Elemen untuk menu Galleries
    galleriesMenu = 'a[href="http://127.0.0.1:8000/admin/photo-galleries"]'; // Elemen untuk menu Galleries
    newGalleriesButton = 'a[href="http://127.0.0.1:8000/admin/photo-galleries/create"]';

    // Elemen untuk form input fields pada halaman create gallery
    titleInput = '#data\\.title'; // Input untuk title
    fileInput = 'input[type="file"]'; // Input untuk file upload
    createButton = '#key-bindings-1'; // Tombol create gallery

    // Elemen untuk menu News
    newsMenu = 'a[href="http://127.0.0.1:8000/admin/news"]'; // Elemen untuk menu News
    newNewsButton = 'a[href="http://127.0.0.1:8000/admin/news/create"]';

    // Metode untuk mengunjungi halaman admin
    visit() {
        cy.visit(this.url);
        return this;
    }

    // Metode untuk login dengan email dan password
    login(email, password) {
        cy.get(this.emailInput).type(email);
        cy.get(this.passwordInput).type(password);
        cy.get(this.loginButton).click();
        return this;
    }

    // Metode untuk memastikan login berhasil (memverifikasi dashboard)
    verifyLoginSuccess() {
        cy.get(this.dashboardHeader).should('contain', 'Dashboard');
        return this;
    }

    // Metode untuk mengklik menu Users
    clickUsersMenu() {
        cy.get(this.usersMenu).click();
        return this;
    }

    // Metode untuk memastikan berada pada halaman Users
    verifyUsersPage() {
        cy.url().should('include', '/admin/users'); // Memastikan URL mengandung '/admin/users'
        return this;
    }

    // Metode untuk mengklik tombol "New user"
    clickNewUserButton() {
        cy.get(this.newUserButton).click(); // Mengklik tombol New user
        return this;
    }

    // Metode untuk mengisi form Create New User
    fillCreateUserForm(name, email, password, role) {
        cy.get(this.nameInput).type(name);  // Mengisi input nama
        cy.get(this.emailInputCreate).type(email);  // Mengisi input email
        cy.get(this.passwordInputCreate).type(password);  // Mengisi input password
        cy.get(this.roleSelect).select(role);  // Memilih role dari dropdown
        return this;
    }

    // Metode untuk mengklik tombol "Create" dan menunggu proses selesai
    submitCreateUserForm() {
        // Mengklik tombol Create
        cy.get(this.createButton).click();

        // Menunggu sampai tombol tidak lagi dalam state loading
        cy.get(this.createButton).should('not.have.attr', 'disabled');
        return this;
    }

    // Metode untuk mengklik tombol Cancel
    clickCancelButton() {
        cy.get(this.cancelButton).click();  // Mengklik tombol Cancel
        return this;
    }

    // Metode untuk mengklik menu Categories
    clickCategoriesMenu() {
        cy.get(this.categoriesMenu).click();  // Mengklik menu Categories
        return this;
    }

    // Metode untuk memastikan berada pada halaman Categories
    verifyCategoriesPage() {
        cy.url().should('include', '/admin/categories'); // Memastikan URL mengandung '/admin/categories'
        return this;
    }

    // Metode untuk mengklik tombol "New Category"
    clicknewCategoryButton() {
        cy.get(this.newCategoryButton).click(); // Mengklik tombol New Category
        return this;
    }

    // Metode untuk mengisi form Create New User
    fillCreateCategoryForm(name) {
        cy.get(this.nameInput).type(name);  // Mengisi input nama
        return this;
    }

    // Metode untuk mengklik tombol "Create" dan menunggu proses selesai
    submitCreateCategoryForm() {
        // Mengklik tombol Create
        cy.get(this.createButton).click();

        // Menunggu sampai tombol tidak lagi dalam state loading
        cy.get(this.createButton).should('not.have.attr', 'disabled');
        return this;
    }

    // Metode untuk mengklik menu Galleries
    clickGalleriesMenu() {
        cy.get(this.galleriesMenu).click();  // Mengklik menu Galleries
        return this;
    }

    // Metode untuk memastikan berada pada halaman Galleries
    verifyGalleriesPage() {
        cy.url().should('include', '/admin/photo-galleries'); 
        return this;
    }

    // Metode untuk mengklik tombol "New Gallery"
    clicknewGalleriesButton() {
        cy.get(this.newGalleriesButton).click(); // Mengklik tombol New Gallery
        return this;
    }

    // Metode untuk mengisi form Create New Gallery (mengisi title dan file)
    fillCreateGalleryForm(title, filePath) {
        cy.get(this.titleInput).type(title);  // Mengisi input title
        cy.get(this.fileInput).attachFile(filePath);  // Mengisi input file (menggunakan filePath untuk file)
        return this;
    }

    // Metode untuk mengklik tombol Create pada halaman Galleries
    submitCreateGalleryForm() {
        cy.get(this.createButton).click(); // Mengklik tombol Create Gallery
        cy.get(this.createButton).should('not.have.attr', 'disabled'); // Menunggu tombol tidak dalam state loading
        return this;
    }

    // Metode untuk mengedit title setelah redirect ke halaman edit
    editGalleryTitle(newTitle) {
        cy.get(this.titleInput).clear().type(newTitle);  // Mengedit input title
        cy.get(this.createButton).click();  // Mengklik tombol Create untuk menyimpan perubahan
        cy.get(this.createButton).should('not.have.attr', 'disabled'); // Menunggu tombol tidak dalam state loading
        return this;
    }

    // Metode untuk mengklik menu News
    clickNewsMenu() {
        cy.get(this.newsMenu).click(); // Mengklik menu News
        return this;
    }

    // Metode untuk memastikan berada pada halaman News
    verifyNewsPage() {
        cy.url().should('include', '/admin/news'); // Memastikan URL mengandung '/admin/news'
        return this;
    }

    clickNewNewsButton() {
        cy.get(this.newNewsButton).click(); // Mengklik tombol New user
        return this;
    }

// Metode untuk mengisi form Create News dengan title, category, status, file, dan Rich Text Editor
fillCreateNewsFormAndEditor(name, category, status, filePath, content) {
    // Mengisi input title
    cy.get(this.nameInput).type(name);  

    // Mengisi input category (dropdown select)
    cy.get('#data\\.category_id').select(category);  // Select category by value (e.g., '2', '1', etc.)

    // Mengisi input status (dropdown select)
    cy.get('#data\\.status').select(status);  // Select status by value (e.g., 'draft', 'publish')

    // Mengisi input file (menggunakan filePath untuk file)
    cy.get(this.fileInput).attachFile(filePath);  

    // Mengisi Rich Text Editor (TinyMCE)
    cy.window().then((win) => {
        const tinyMCE = win.tinymce;
        
        if (tinyMCE && tinyMCE.activeEditor) {
            const editor = tinyMCE.activeEditor;
            
            // Set the content of the editor using TinyMCE's internal API
            editor.setContent(content);
        }
    });

    return this;
}

    // Metode untuk mengklik tombol Create pada halaman News
    submitCreateNewsForm() {
        cy.get(this.createButton).click(); // Mengklik tombol Create News
        cy.get(this.createButton).should('not.have.attr', 'disabled'); // Menunggu tombol tidak dalam state loading
        return this;
    }
    
}

export const adminPage = new AdminPage();