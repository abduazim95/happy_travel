<template>
  <div id="menu-links">
    <MenuLink v-for="link in links" :key="link.value" :to="link.value">{{link.text}}</MenuLink>
  </div>
</template>
<script>

const links = [
  { text: 'Главная', value: '/' },
  { text: 'Круизы', value: '/cruise' },
  { text: 'Страны', value: '/countries' },
  { text: 'Туры', value: '/tours' },
  { text: 'Горящие туры', value: '/highlight-tours' },
  { text: 'Туры в рассрочку', value: '/credit-tours' },
  { text: 'Отзывы', value: '/reviews' },
  { text: 'О компании', value: '/about' }
];

export default {
  data() {
    return {
      links
    }
  }
}
</script>