import { adminPage } from '../pages/Admin.Page';

describe('Admin Page Login', () => {
    const email = 'admin@gmail.com';
    const password = '123';

    it('should log in successfully', () => {
        // Visit the admin page and perform login
        adminPage.visit().login(email, password);

        // Verify successful login by checking dashboard header
        adminPage.verifyLoginSuccess();
    });
});

describe('Add Page User Management', () => {
    const email = 'admin@gmail.com';
    const password = '123';

    beforeEach(() => {
        // Log in sebelum mengakses halaman lainnya
        adminPage.visit().login(email, password);
        adminPage.verifyLoginSuccess();
    });

    // Tes untuk memverifikasi navigasi ke halaman "Users"
    it('should navigate to the Users page', () => {
        adminPage.clickUsersMenu()
            .verifyUsersPage();
    });

    // Tes untuk memverifikasi navigasi ke halaman "Create New User"
    it('should navigate to the "Create New User" page', () => {
        adminPage.clickUsersMenu()
            .verifyUsersPage()
            .clickNewUserButton();
    });
});

describe('Page Create New User', () => {
    const email = 'admin@gmail.com';
    const password = '123';

    beforeEach(() => {
        // Log in sebelum mengakses halaman lainnya
        adminPage.visit().login(email, password);
        adminPage.verifyLoginSuccess();
    });

    // Tes untuk membuat pengguna baru dan membatalkan operasi
    it('should create a new user and then cancel the operation', () => {
        // Arahkan ke halaman "Users" dan klik tombol "New User"
        adminPage.clickUsersMenu()
            .verifyUsersPage()
            .clickNewUserButton();  // Klik tombol "New User"

        // Isi form "Create New User"
        const newUserName = 'John Doeee12';
        const newUserEmail = 'johndooee12@example.com';
        const newUserPassword = 'password1234';
        const newUserRole = 'author';

        adminPage.fillCreateUserForm(newUserName, newUserEmail, newUserPassword, newUserRole);

        // Kirim form (simulasi klik tombol Create)
        adminPage.submitCreateUserForm();

        // Sekarang, klik tombol Cancel untuk menguji perilaku cancel
        adminPage.clickCancelButton();

        // Verifikasi bahwa setelah mengklik Cancel, kita kembali ke halaman Users
        cy.url().should('include', '/admin/users');  // Verifikasi kita diarahkan kembali ke halaman Users

        cy.wait(30000);  // Menunggu beberapa detik untuk memastikan proses selesai
    });
});

describe('Add Category Management', () => {
    const email = 'admin@gmail.com';
    const password = '123';

    beforeEach(() => {
        // Login hanya sekali sebelum setiap tes dimulai
        adminPage.visit().login(email, password);
        adminPage.verifyLoginSuccess();
    });

    it('should navigate to the Categories page', () => {
        // Mengklik menu Categories dan memastikan halaman Categories dimuat dengan benar
        adminPage.clickCategoriesMenu().verifyCategoriesPage();
    });
});

describe('Add Category Creation', () => {
    const email = 'admin@gmail.com';
    const password = '123';

    beforeEach(() => {
        // Login hanya sekali sebelum setiap tes dimulai
        adminPage.visit().login(email, password);
        adminPage.verifyLoginSuccess();
    });

    it('should navigate to the "Create New Category" page', () => {
        // Mengklik tombol New Category untuk menuju halaman pembuatan kategori baru
        adminPage.clickCategoriesMenu()

            .clicknewCategoryButton();
    });

    it('should create a new category', () => {
        // Mengisi dan mengirimkan form untuk membuat kategori baru
        adminPage.clickCategoriesMenu()

            .clicknewCategoryButton()
            .fillCreateCategoryForm('Technology')
            .submitCreateCategoryForm();
    });

    it('should cancel creating a new category', () => {
        // Mengklik tombol Cancel setelah mencoba membuat kategori baru
        adminPage.clickCategoriesMenu()

            .clicknewCategoryButton()
            .fillCreateCategoryForm('Lifestyle')
            .clickCancelButton();

        // Verifikasi kita kembali ke halaman Categories
        adminPage.verifyCategoriesPage();

        cy.wait(30000); // Menunggu 30 detik (30000 ms)
    });
});

describe('Admin Page Tests', () => {
    const email = 'admin@gmail.com';
    const password = '123';
    const filePath = 'membaca.jpg';

    beforeEach(() => {
        // Visit the admin login page before each test
        adminPage.visit();
    });

    describe('Login Tests', () => {
        it('should log in successfully with valid credentials', () => {
            // Log in with valid credentials
            adminPage.login(email, password);
            adminPage.verifyLoginSuccess();
        });
    });

    describe('add News create', () => {
        beforeEach(() => {
            // Ensure login is successful before each news test
            adminPage.login(email, password);
            adminPage.verifyLoginSuccess();
            adminPage.clickNewsMenu();
            adminPage.verifyNewsPage();
        });

        it('should navigate to the News page', () => {
            // Verify user is on the News page
            adminPage.verifyNewsPage();
        });

        it('should create a new news article', () => {
            // Click the New News button
            adminPage.clickNewNewsButton();

            // Fill the form with title, category, status, file, and editor content
            const name = 'New News Article';
            const category = '2'; // '2' for Berita Acara
            const status = 'Draft'; // 'draft' for Draft status
            const content = 'awdasdwada';  // Content for the TinyMCE editor

            adminPage.fillCreateNewsFormAndEditor(name, category, status, filePath, content);
            cy.wait(8000); // Wait for any async operations (e.g., file upload, editor content load)

            // Optionally, submit the form (ensure there's a method to submit)
            adminPage.submitCreateNewsForm();

        });

        // Additional test for creating another type of news (if needed)
        it('should create another type of news article', () => {
            adminPage.clickNewNewsButton();

            const name = 'Another News Article';
            const category = '1'; // '1' for Berita Lainnya
            const status = 'Publish'; // 'publish' for Published status
            const content = 'Another content for the editor';  // Content for the TinyMCE editor

            adminPage.fillCreateNewsFormAndEditor(name, category, status, filePath, content);
            cy.wait(8000); // Wait for async operations

            // Submit the form and verify
            adminPage.submitCreateNewsForm();

            cy.wait(30000);
        });
    });
});

describe('Add Page Photo-Galleries Menu Management', () => {
    const email = 'admin@gmail.com';
    const password = '123';

    beforeEach(() => {
        // Login terlebih dahulu sebelum setiap tes
        adminPage.visit().login(email, password);
        adminPage.verifyLoginSuccess();
    });

    it('should login and navigate to Galleries page', () => {
        // Klik menu Galleries dan verifikasi halaman Galleries
        adminPage.clickGalleriesMenu()
            .verifyGalleriesPage();
    });
});

describe('add Page Photo-Galleries Create New Gallery', () => {
    const email = 'admin@gmail.com';
    const password = '123';
    const title = 'My New Gallery';
    const filePath = 'membaca.jpg';  // Jalur relatif file dalam folder fixtures

    beforeEach(() => {
        // Login terlebih dahulu sebelum setiap tes
        adminPage.visit().login(email, password);
        adminPage.verifyLoginSuccess();
    });

    it('should open "New Gallery" form and fill it', () => {
        // Klik menu Galleries dan verifikasi halaman Galleries
        adminPage.clickGalleriesMenu()
            .verifyGalleriesPage();

        // Klik tombol "New Gallery" untuk membuka form
        adminPage.clicknewGalleriesButton();

        // Isi form dengan judul dan file gambar
        adminPage.fillCreateGalleryForm(title, filePath);

        // Menunggu beberapa detik sebelum mengirimkan form
        cy.wait(8000); // Menunggu 8 detik (5000 ms)

        // Kirim form untuk membuat gallery baru
        adminPage.submitCreateGalleryForm();

        // Verifikasi setelah pengisian dan pengiriman form
        cy.url().should('include', '/admin/photo-galleries');  // Memastikan URL mengarah ke halaman Galleries

        // Menunggu beberapa detik setelah submit

    });
});

describe('Photo-Galleries Edit Gallery', () => {
    const email = 'admin@gmail.com';
    const password = '123';
    const title = 'My New Gallery';
    const updatedTitle = 'Updated Gallery Title';  // Judul baru untuk gallery
    const filePath = 'membaca.jpg';  // Jalur relatif file dalam folder fixtures

    beforeEach(() => {
        // Login terlebih dahulu sebelum setiap tes
        adminPage.visit().login(email, password);
        adminPage.verifyLoginSuccess();
    });

    it('should create a new gallery and edit its title', () => {
        // Klik menu Galleries dan verifikasi halaman Galleries
        adminPage.clickGalleriesMenu()
            .verifyGalleriesPage();

        // Klik tombol "New Gallery" untuk membuka form
        adminPage.clicknewGalleriesButton();

        // Isi form dengan judul dan file gambar
        adminPage.fillCreateGalleryForm(title, filePath);

        // Menunggu beberapa detik sebelum mengirimkan form
        cy.wait(5000); // Menunggu 5 detik

        // Kirim form untuk membuat gallery baru
        adminPage.submitCreateGalleryForm();

        // Verifikasi setelah pengisian dan pengiriman form
        cy.url().should('include', '/admin/photo-galleries');  // Memastikan URL mengarah ke halaman Galleries

        // Verifikasi bahwa kita berada di halaman edit (biasanya URL-nya mengandung '/edit')
        cy.url().should('include', '/edit');  // Verifikasi bahwa kita diarahkan ke halaman edit

        // Mengedit title gallery setelah diarahkan ke halaman edit
        adminPage.editGalleryTitle(updatedTitle);

        // Verifikasi bahwa title telah diperbarui
        cy.get(adminPage.titleInput).should('have.value', updatedTitle);  // Memastikan title yang baru telah terisi

        // Verifikasi bahwa perubahan title berhasil disimpan dan gallery telah diperbarui
        cy.url().should('include', '/admin/photo-galleries');  // Memastikan kita kembali ke halaman Galleries

        cy.wait(30000); // Menunggu 30 detik (30000 ms)
    });
});