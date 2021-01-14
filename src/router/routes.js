const routes = [
  {
    path: "/",
    component: () => import("layouts/MainLayout.vue"),
    children: [
      {
        path: "",
        component: () => import("pages/Index.vue")
      },
      {
        path: "/product",
        component: () => import("pages/About.vue")
      },
      {
        path: "/contact",
        component: () => import("pages/Contact.vue")
      },
      {
        path: "/subscribed",
        component: () => import("pages/Subscribed.vue")
      }
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: "*",
    component: () => import("pages/Error404.vue")
  }
];

export default routes;
