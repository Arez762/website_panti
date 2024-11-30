import { adminPage } from '../pages/Admin.Page';

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




