package theme;

import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.Test;
import theme.dark.DarkDialog;
import theme.dark.DarkFooter;
import theme.dark.DarkThemeFactory;
import theme.dark.DarkToolbar;

import static org.junit.jupiter.api.Assertions.assertTrue;

class DarkThemeFactoryTest {

    private ThemeFactory darkThemeFactory = new DarkThemeFactory();

    @Test
    void should_receive_dark_dialog() {
        assertTrue( darkThemeFactory.createDialog() instanceof DarkDialog );
    }

    @Test
    void should_receive_dark_toolbar() {
        assertTrue( darkThemeFactory.createToolbar() instanceof DarkToolbar );
    }

    @Test
    void should_receive_dark_footer() {
        assertTrue( darkThemeFactory.createFooter() instanceof DarkFooter );
    }

}
