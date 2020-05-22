<template>
    <ul class="chat">
        <li class="left clearfix" v-for="message in messages" :key="message.id">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">
                        {{ message.user.name }}
                    </strong>
                </div>
                <p>
                    {{ message.message }}
                </p>
            </div>
        </li>
    </ul>
</template>

<script>
  export default {
    props: {
        message: {
            required: false,
            type: Array,
            default: function () {
                return [];
            }
        },
        user: {
            required: false,
            type: Object,
            default: function () {
                return {};
            }
        }
    }
  };
</script>