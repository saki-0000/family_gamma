export default defineEventHandler(async (): Promise<any> => {
    await $fetch<void>("http://localhost/sanctum/csrf-cookie");

    // await $fetch<void>("http://localhost/login", {
    //     method: "POST",
    //     params: {
    //         email: "ewell.mills@example.org",
    //         password: "password",
    //     },
    // });

    // const result = await $fetch<string>("http://localhost/api/user");

    // return result;
    return {};
});
