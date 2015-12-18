<?php
// Expression: !isAuthenticated()
return function(array $context) {
    if (!isset($context['token'])) {
        throw new RuntimeException('The context contains no item with key "token".');
    }

    if (!$context['token'] instanceof Symfony\Component\Security\Core\Authentication\Token\TokenInterface) {
        throw new RuntimeException(sprintf('The item "token" is expected to be of type "Symfony\Component\Security\Core\Authentication\Token\TokenInterface", but got "%s".', get_class($context['token'])));
    }

    return !(!$context['container']->get('security.authentication.trust_resolver')->isAnonymous($context['token']));
};
